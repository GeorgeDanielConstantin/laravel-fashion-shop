<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Laravel 9 + Bootstrap Template</title>
  {{-- Includiamo gli assets con la direttiva @vite --}}
  @vite('resources/js/app.js')
</head>

@yield('cdn')
<body>
@include('partials.navbar')

<main class="container">
  @yield('title')
  @yield('content')
</main>
@yield('modals')

</body>

</html>