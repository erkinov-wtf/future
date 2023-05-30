<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title') - {{ config('app.name', 'Laravel') }}</title>
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
    @stack('styles')
    @stack('scripts')

    <!-- Css -->
    <link href="{{ asset('assets/libs/tiny-slider/tiny-slider.css') }}" rel="stylesheet">
    <!-- Bootstrap Css -->
    <link href="{{ asset('assets/css/bootstrap.min.css') }}" class="theme-opt" rel="stylesheet" type="text/css"/>
    <!-- Icons Css -->
    <link href="{{ asset('assets/css/icons.min.css') }}" rel="stylesheet" type="text/css"/>
    <link href="{{ asset('assets/libs/remixicon/fonts/remixicon.css') }}" rel="stylesheet" type="text/css"/>
    <link href="{{ asset('assets/libs/@iconscout/unicons/css/line.css') }}" type="text/css" rel="stylesheet"/>
    <!-- Style Css-->
    <link href="{{ asset('assets/css/style.min.css') }}" class="theme-opt" rel="stylesheet" type="text/css"/>

    <livewire:styles/>
</head>
<body>

{{ $slot ?? '' }}


<script src="{{ asset('assets/libs/tiny-slider/min/tiny-slider.js') }}"></script>
<script src="{{ asset('assets/libs/apexcharts/apexcharts.min.js') }}"></script>
<script src="{{ asset('assets/js/doctor-apexchart.init.js') }}"></script>
<script src="{{ asset('assets/libs/feather-icons/feather.min.js') }}"></script>
<!-- Main Js -->
<!-- JAVASCRIPT -->
<script src="{{ asset('assets/libs/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('assets/js/plugins.init.js') }}"></script>
<script src="{{ asset('assets/js/app.js') }}"></script>
<livewire:scripts/>
</body>
</html>
