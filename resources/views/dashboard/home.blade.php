<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
      "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no" />
    <title>Saranaku - Your management friend</title>

    @yield('css_before')
    <link rel="stylesheet" href="{{ asset('css/bootstrap/bootstrap.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/bootstrap/mdb.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/semantic-ui/semantic.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/app.css') }}" />
    <link href="https://fonts.googleapis.com/css?family=Exo+2&display=swap" rel="stylesheet" />

    <style>
        body{
            font-family: 'Exo 2', sans-serif;
        }

        .font-exo{
            font-family: 'Exo 2', sans-serif;
        }

        div{
            padding: 0;
            margin: 0;
        }
    </style>

    @yield('css_after')

    <script type="text/javascript" src="{{ asset('js/jquery-3.4.1.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/semantic.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/popper.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/mdb.min.js') }}"></script>
    @yield('js_before')

</head>
<body class="container-fluid">
{{-- Header Photo --}}
    <header class="row bg-dark d-flex justify-content-center align-items-center" style="height: 10% !important;">
        <div class="col-md-2"></div>
        <div class="col-5 col-md-4">
            <a href="#">
                <h2 class="text-light">Saranaku</h2>
            </a>
        </div>
        <div class="col-7 col-md-4 d-flex justify-content-end">
            <a href="#">
                <button class="ui inverted button">Sign up</button>
            </a>
            <a href="/auth/login">
                <button class="ui inverted button">Login</button>
            </a>
        </div>
        <div class="col-md-2"></div>
    </header>

    <section class="row h-50 notebook-girl-bg">
        <div class="col-md-3"></div>
        <div class="col-12 col-md-9 d-flex no-gutters">
            <span class="align-self-end align-self-md-center">
                <h1 id="track" class="display-3 text-white font-exo invisible">Track</h1>
                <h1 id="maximize" class="display-3 text-white font-exo invisible">&nbsp;&nbsp;Maximize</h1>
                <h1 id="organize" class="display-3 text-white font-exo invisible">&nbsp;&nbsp;&nbsp;&nbsp;Organize</h1>
            </span>

            <div class=""></div>
        </div>
    </section>

    <section class="row h-50 ">
        <div class="col-md-3"></div>

    </section>


    <script type="text/javascript" src="{{ asset('js/custom-scripts/dashboard/home.js')  }}"></script>
</body>
</html>
