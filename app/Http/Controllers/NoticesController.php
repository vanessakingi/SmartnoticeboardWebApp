<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Notices\Request as MachinesRequest;

class NoticesController extends Controller
{
    public function post(Array $params, String $url){
        $curl = curl_init();
            curl_setopt_array($curl, array(
                CURLOPT_URL => $url,
                CURLOPT_RETURNTRANSFER => true,
                CURLOPT_TIMEOUT => 30,
                CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
                CURLOPT_CUSTOMREQUEST => "POST", 
                CURLOPT_POSTFIELDS => $params, 
            ));
            $response = curl_exec($curl);
            $err = curl_error($curl);
            curl_close($curl);
            if ($err) {
                return $err;
            } else {
                return json_decode($response);
            }
    }
    public function index(){
        return view('index',[
            'users'=>0,
        ]);
    }
    public function login(){
        return view('login');
    }
    public function upload(){
        return view('upload');
    }
    public function register(){
        return view('register');
    }
    public function about(){
        return view('about');
    }
    public function news(){
        return view('news');
    }
    public function contact(){
        return view('contact');
    }
    public function createuser(Request $request){
            
        $save = $this->post([
            'full_name'=>$request->full_name,
            'username'=>$request->username,
            'email'=>$request->email,
            'department'=>$request->department,
            'password'=>$request->password,
        ],env('API_URL').'/createuser/');

        if(json_decode(json_encode($save))->status_code==500){
            return redirect()->back()->withErrors([
                'error'=> 'Unexpected Error 1',
            ]);
        }
        return redirect()->back()->withErrors([
            'success'=> 'User Created',
        ]);
    }

    public function loginuser(Request $request){
            
        $save = $this->post([
            'username'=>$request->username,
            'password'=>$request->password,
        ],env('API_URL').'/login');
        
        if(json_decode(json_encode($save))->status_code==500){
            return redirect()->back()->withErrors([
                'error'=> 'Unexpected Error 1',
            ]);
        }
        return view('index',[
            'users'=>1,
        ]);
    }

    public function uploadpic(Request $request){
            
        $save = $this->post([
            'start_date'=>$request->start_date,
            'stop_date'=>$request->stop_date,
            'urgent'=>$request->urgent,
            'image_name'=>base64_encode(file_get_contents($request->file('image')->getPathName()))
        ],env('API_URL').'/createimages/');
        dd($save);
        
        if(json_decode(json_encode($save))->status_code==500){
            return redirect()->back()->withErrors([
                'error'=> 'Unexpected Error 1',
            ]);
        }
        return view('index',[
            'users'=>1,
        ]);

    }
}
