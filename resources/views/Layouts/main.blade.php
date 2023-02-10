<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>bkk</title>
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
  </head>
  <body>
    @include('Navbar.navbar')
    <div class="container">
        @yield('container')
    </div>
    <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
  </body>
</html>