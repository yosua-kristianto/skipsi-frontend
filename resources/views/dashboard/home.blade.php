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


    @yield('css_after')


    <script type="text/javascript" src="{{ asset('js/jquery-3.4.1.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/mdb.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/semantic.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/popper.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
    @yield('js_before')

</head>
<body class="container-fluid">
{{-- Header Photo --}}
    <header class="row" style="background-image: {{ asset('media/image/notebook-girl.jpg') }}">
        <div class="col-12">
            {{-- <img src="{{ asset('') }}" /> --}}
        </div>
    </header>
</body>
</html>