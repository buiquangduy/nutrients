<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name') }}</title>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">
        <layout-header></layout-header>
        <router-view></router-view>
    </div>

    <!-- Scripts -->
    <script>

        @if(Session::has('verify_failed'))
            window.verify_failed = {{ Session::get('verify_failed') }};
        @endif
        window.user = {!! json_encode(Auth::user()) !!};
    </script>
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
