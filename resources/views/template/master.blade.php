<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
        "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <title>Home</title>
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
<body>
    <div id="spinner-loading" class="ui segment d-none">
        <p></p>
        <div class="ui active dimmer">
            <div class="ui loader"></div>
        </div>
    </div>

    <button class="ui blue button" type="button" onclick="$('#spinner-loading').removeClass('d-none');">Huehuehuehue</button>

    @yield('js_after')
</body>
</html>
