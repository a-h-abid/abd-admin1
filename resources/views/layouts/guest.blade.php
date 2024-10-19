<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>@yield('page-title') | {{ config('app.name') . ' Administrator' }}</title>
  @vite(['resources/css/app.css', 'resources/js/app.ts'])
</head>
<body class="bg-white dark:bg-gray-800">
  <div class="flex flex-col w-full mx-auto mt-16 max-w-lg px-4 py-8 sm:px-6 md:px-8 lg:px-10">
    @yield('contents')
  </div>
</body>
</html>
