<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Legion</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600" rel="stylesheet" />
  

<!-- Swiper CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />

<!-- Place this inside your <head> tag -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" integrity="sha512-k6RqeWeciQGKoAN4C0tMoZtU/yQ3S1z9jq8W/3wZgCM8uE2bUQ6h5qZ3i4qLgfwLkQq3ebj0qgyZIVG9V8Hkw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- Tailwind CSS -->

<script src="https://cdn.tailwindcss.com"></script>

    <!-- Styles / Scripts -->
   <link rel="stylesheet" href="{{ asset('css/master.css') }}">

</head>
<body class="">

    <!-- Portfolio Header -->
    @include('includes.Header')

    <!-- Main Content -->
    <main class="">
        <!-- Your page content here -->
        @yield('content')
    </main>

     <!-- Portfolio Footer  -->
    @include('includes.Footer')

    <!-- Scripts -->

    <script src="{{ asset('js/master.js')}}"></script>
    <script src="https://cdn.tailwindcss.com"></script>
  <!-- Swiper JS -->
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>


</body>
</html>
