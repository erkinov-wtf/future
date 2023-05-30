<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title') - {{ config('app.name', 'Laravel') }}</title>
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
    @stack('styles')
    @stack('scripts')
    <livewire:styles/>


    <!-- Css -->
    <link href="{{ asset('assets/libs/simplebar/simplebar.min.css') }}" rel="stylesheet">
    <!-- Bootstrap Css -->
    <link href="{{ asset('assets/css/bootstrap.min.css') }}" class="theme-opt" rel="stylesheet" type="text/css"/>
    <!-- Icons Css -->
    <link href="{{ asset('assets/css/icons.min.css') }}" rel="stylesheet" type="text/css"/>
    <link href="{{ asset('assets/libs/remixicon/fonts/remixicon.css') }}" rel="stylesheet" type="text/css"/>
    <link href="{{ asset('assets/libs/@iconscout/unicons/css/line.css') }}" type="text/css" rel="stylesheet"/>
    <!-- Style Css-->
    <link href="{{ asset('assets/css/style.min.css') }}" class="theme-opt" rel="stylesheet" type="text/css"/>
</head>
<body class="font-sans antialiased">

<div x-data="{ sidebarOpen: false }" x-cloak>
    <div class="flex min-h-screen">
{{--
        @auth
            <!-- regular sidebar -->
            <div class="sidebar hidden flex-none w-full md:block md:w-60 px-4 bg-primary dark:bg-gray-700">
                @include('layouts.navigation')
            </div>

                        <!--sidebar on mobile-->
                        <div x-show="sidebarOpen" class="sidebar min-w-full px-4 bg-primary dark:bg-gray-700 md:hidden">
                            @include('layouts.navigation')
                        </div>
                    @endauth--}}

        <div id="main" class="w-full bg-gray-100 dark:bg-gray-600">

            <div class="px-7 py-5">
                {{ $slot ?? '' }}
            </div>
        </div>

    </div>
</div>

<livewire:scripts/>
<!-- javascript -->
<script src="{{ asset('assets/libs/simplebar/simplebar.min.js') }}"></script>
<script src="{{ asset('assets/libs/apexcharts/apexcharts.min.js') }}"></script>
<script src="{{ asset('assets/js/admin-apexchart.init.js') }}"></script>
<script src="{{ asset('assets/libs/feather-icons/feather.min.js') }}"></script>

<script src="{{ asset('assets/libs/feather-icons/feather.min.js') }}"></script>
<!-- Main Js -->
<!-- JAVASCRIPT -->
<script src="{{ asset('assets/libs/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('assets/js/plugins.init.js') }}"></script>
<script src="{{ asset('assets/js/app.js') }}"></script>
</body>
</html>
