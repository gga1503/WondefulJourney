<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Wondelful Journey</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>

<body>
    <div class="row justify-content-center" alt="Max-width 100%" style="background-color: gainsboro;">
        <div class="col-md-10 mt-5 mb-5">
            <div class="text-center">
                <h1 style="font-size:50pt;">Wonderful Journey</h1>
                <h5>Blog of Indonesia Tourism</h5>
            </div>
        </div>
    </div>

    <div class="container mt-4 px-0">
        <nav class="navbar navbar-expand-lg navbar-light  bg-dark">
        
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav">
                    <li class="nav-item mx-2">
                        <a href="{{ url('/greeting') }}" class="nav-link btn btn-dark text-white" type="button">Home</a>
                    </li>
                    <li class="nav-item mx-2">
                        <a href="{{ url('/profile') }}" class="nav-link btn btn-dark text-white" type="button">Profile</a>
                    </li>
                    <li class="nav-item mx-2">
                        <a href="{{ url('/create_blog') }}" class="nav-link btn btn-dark text-white" type="button">Blog</a>
                    </li>
                </ul>
            </div>

            <div class="form-inline my-2 my-lg-0" id="navbarSupportedContent">
                <ul class="navbar-nav">
                    <li class="nav-item mx-2">
                        <a class="nav-link btn btn-dark text-white" href="{{ url('/logout') }}">Logout</a>
                    </li>
                    </li>
                </ul>
            </div>
        </nav>

        <div class="mt-4">
            @yield('content')
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
</body>

</html>