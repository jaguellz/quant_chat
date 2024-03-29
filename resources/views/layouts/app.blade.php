<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <link href={{asset("assets/css/template.min.css")}} rel="stylesheet">
    <!---<link href="assets/css/template.dark.min.css" rel="stylesheet" media="(prefers-color-scheme: dark)"> --->

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">

            @yield('content')

    </div>
    <script src={{asset("assets/js/libs/jquery.min.js")}}></script>
    <script src={{asset("assets/js/plugins/plugins.bundle.js")}}></script>
    <script src={{asset("assets/js/template.js")}}></script>

    <script>
        $("#chat-id-1-input").keypress(function(event) {
            if (event.keyCode === 13) {
                $("#textto").click();
            }
        });
    </script>
</body>
</html>
