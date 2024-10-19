<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>@yield('page-title') | {{ config('app.name') . ' Administrator' }}</title>
  @vite(['resources/css/app.css', 'resources/js/app.ts'])
</head>
<body class="">
  @yield('contents')
</body>
</html>
