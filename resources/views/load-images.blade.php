<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Ads</title>

    <!-- Bootstrap core CSS -->
    <link href="{{ asset('styles/css/bootstrap.min.css') }}" rel="stylesheet">

</head>

<body>

    <!-- Navigation -->


    <!-- Page Content -->
    <div class="row container-fluid" style="max-height:100vh; padding: 0px; margin:0px;">
        @foreach($notices as $notice)
        <div class="col-md-6" style="padding: 0px; margin:0px;">
            <div class="card" style="width: 100%;">
                <img width="100%" style="height: 50vh;" class="img-responsive"
                    src="{{ env('API_URL').'/'.$notice->image_name }}" alt="Card image cap">

            </div>
        </div>
        @endforeach

    </div>



    <!-- Bootstrap core JavaScript -->
    <script src="{{ asset('styles/jquery-3.2.1.min.js') }}"></script>
    <script src="{{ asset('styles/js/bootstrap.min.js') }}"></script>
    <script>
        setInterval(function () {
            location.reload();
        }, 3000)
    </script>

</body>

</html>