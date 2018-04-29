<!doctype html>
<html lang="{{ config('app.locale') }}">
<head>
  <meta charset="UTF-8">
  <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <title>AVCA RRHH | @yield('title')</title>
  <link rel="stylesheet" href="{{ asset('css/app.css') }}">
  <link rel="stylesheet" href="{{ asset('css/fa-svg-with-js.css') }}">
  {{--<link rel="stylesheet" href="{{ asset('css/rrhh.css') }}">--}}
  @yield('styles')
</head>
<body>

  <main id="rrhh">
    @yield('content')
  </main>

  <script src="{{ asset('js/app.js') }}"></script>
  @yield('scripts')
</body>
</html>