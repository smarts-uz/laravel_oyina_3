<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

        <!-- Styles -->
        <link rel="stylesheet" href="{{ mix('css/app.css') }}">
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
        <link rel="stylesheet" href="{{ asset('css/tailwind.output.css') }}" />
        <link rel="stylesheet" href="./css/main.css">

        <link rel="stylesheet" type="text/css" href="./css/splide.min.css">
	    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@splidejs/splide@latest/dist/css/splide.min.css">
	
	    
        
        @livewireStyles

        
    </head>
    <body class="font-sans antialiased">

        @include('components.navbar')

        @yield('content')

        @include('components.footer')
       
       

        @livewireScripts
    </body>
    <!-- Scripts -->
    <script src="{{ mix('js/app.js') }}" defer></script>
    <script src="https://code.iconify.design/1/1.0.7/iconify.min.js"></script>
    <script type="text/javascript" src="./js/splide.min.js"></script>
    <script type="text/javascript" src="./js/splide.js"></script>
    <script type="text/javascript" src="./js/main.js"></script>

    
</html>
