<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ $title }}</title>
    {{-- <link rel="shortcut icon" type="image/png" href="../assets/images/logos/favicon.png" /> --}}
    <link rel="stylesheet" href="{{ asset('admin_dashbroad/assets/css/styles.min.css') }}" />
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body>
    <!--  Body Wrapper -->
    <div class="page-wrapper" id="main-wrapper" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full"
        data-sidebar-position="fixed" data-header-position="fixed">
        <aside class="left-sidebar">
            @include('layout.app.sidebar')
        </aside>
        <!--  Main wrapper -->
        <div class="body-wrapper">
            <header class="app-header">
                @include('layout.app.navbar')
            </header>
            <div class="container">
                {{ $slot }}
                {{-- <div class="py-6 px-6 text-center">
                    <p class="mb-0 fs-4">Design and Developed by <a href="https://adminmart.com/" target="_blank"
                            class="pe-1 text-primary text-decoration-underline">AdminMart.com</a> Distributed by <a
                            href="https://themewagon.com">ThemeWagon</a></p>
                </div> --}}
            </div>
        </div>
    </div>
    <script src="{{ asset('admin_dashbroad/assets/libs/jquery/dist/jquery.min.js') }}"></script>
    <script src="{{ asset('admin_dashbroad/assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('admin_dashbroad/assets/js/sidebarmenu.js') }}"></script>
    <script src="{{ asset('admin_dashbroad/assets/js/app.min.js') }}"></script>
    <script src="{{ asset('admin_dashbroad/assets/libs/apexcharts/dist/apexcharts.min.js') }}"></script>
    <script src="{{ asset('admin_dashbroad/assets/libs/simplebar/dist/simplebar.js') }}"></script>
    <script src="{{ asset('admin_dashbroad/assets/js/dashboard.js') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    @stack('js')
</body>

</html>
