<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
        "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <title>Login</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no" />
    <title>Saranaku - Your management friend</title>

    @yield('css_before')
    <link rel="stylesheet" href="{{ asset('css/bootstrap/bootstrap.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/bootstrap/mdb.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/semantic-ui/semantic.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/app.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/fawesome/all.css') }}" />
    <link href="https://fonts.googleapis.com/css?family=Exo+2&display=swap" rel="stylesheet" />

    <style>
        body{
            overflow: hidden;
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
    <script type="text/javascript" src="{{ asset('js/mdb.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/semantic.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/popper.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/fawesome/all.js') }}"></script>
    @yield('js_before')
</head>
<body id="pixabay-backdrop" class="h-100 text-white">
    <a href="/home">
        <button type="button" class="btn btn-dark rounded-circle floatingActionButtonUpLeft"><i class="fa fa-2x fa-home"></i></button>
    </a>

    {{-- Login Box --}}
    <section id="login-box">
        <div class="container">
            <div class="row no-gutters">
                <div class="col-12 d-flex justify-content-start">
                    <h4 class="display-4 font-exo">Login</h4>
                </div>
            </div>
            <br />
            <form method="POST" action="/auth/login">
                <div class="row no-gutters">
                    <div class="col-12">
                        <input type="text" class="pi-login-form-control" name="email" placeholder="Email@example.com" />
                    </div>
                </div>
                <br />
                <div class="row no-gutters">
                    <div class="col-12">
                        <input type="password" class="pi-login-form-control" name="email" placeholder="Password" />
                    </div>
                </div>
                <br />
                <div class="row no-gutters">
                    <div class="col-12 d-flex justify-content-end">
                        <button type="submit" class="ui inverted button">Login</button>
                    </div>
                </div>
            </form>
        </div>
    </section>

</body>
</html>
