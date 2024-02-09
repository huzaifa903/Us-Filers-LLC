<!DOCTYPE html>

<html lang="en" class="light-style customizer-hide" dir="ltr" data-theme="theme-default"
    data-assets-path="../../assets/" data-template="vertical-menu-template">

<head>
    <meta charset="utf-8" />
    <meta name="viewport"
        content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />

    <title>Login - GPM</title>

    <meta name="description" content="" />

    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="{{ url('/Gohar Group of Companies-01.png') }}" />

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap"
        rel="stylesheet" />

    <!-- Icons -->
    <link rel="stylesheet" href="{{ url('/assets/vendor/fonts/materialdesignicons.css') }}" />
    <link rel="stylesheet" href="{{ url('/assets/vendor/fonts/fontawesome.css') }}" />
    <!-- Menu waves for no-customizer fix -->
    <link rel="stylesheet" href="{{ url('/assets/vendor/libs/node-waves/node-waves.css') }}" />

    <!-- Core CSS -->
    <link rel="stylesheet" class="template-customizer-core-css" href="{{ url('assets/vendor/css/rtl/core.css') }}" />
    <link rel="stylesheet" class="template-customizer-theme-css"
        href="{{ url('assets/vendor/css/rtl/theme-default.css') }}" />
    <link rel="stylesheet" href="{{ url('/assets/css/demo.css') }}" />

    <!-- Vendors CSS -->
    <link rel="stylesheet" href="{{ url('/assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css') }}" />
    <link rel="stylesheet" href="{{ url('/assets/vendor/libs/typeahead-js/typeahead.css') }}" />
    <!-- Vendor -->
    <link rel="stylesheet" href="{{ url('/assets/vendor/libs/formvalidation/dist/css/formValidation.min.css') }}" />

    <!-- Page CSS -->
    <!-- Page -->
    <link rel="stylesheet" href="{{ url('/assets/vendor/css/pages/page-auth.css') }}" />
    <!-- Helpers -->
    <script src="{{ url('/assets/vendor/js/helpers.js') }}"></script>

    <!--! Template customizer & Theme config files MUST be included after core stylesheets and helpers.js in the <head> section -->
    <!--? Template customizer: To hide customizer set displayCustomizer value false in config.js.  -->
    <script src="{{ url('/assets/vendor/js/template-customizer.js') }}"></script>
    <!--? Config:  Mandatory theme config file contain global vars & default theme options, Set your preferred theme option in this file.  -->
    <script src="{{ url('/assets/js/config.js') }}"></script>
</head>

<body>
    <!-- Content -->

    <div class="authentication-wrapper authentication-cover">

        @yield('content')

        <!-- / Content -->

        <!-- Core JS -->
        <!-- build:js assets/vendor/js/core.js -->
        <script src="{{ url('/assets/vendor/libs/jquery/jquery.js') }}"></script>
        <script src="{{ url('/assets/vendor/libs/popper/popper.js') }}"></script>
        <script src="{{ url('/assets/vendor/js/bootstrap.js') }}"></script>
        <script src="{{ url('/assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js') }}"></script>
        <script src="{{ url('/assets/vendor/libs/node-waves/node-waves.js') }}"></script>

        <script src="{{ url('/assets/vendor/libs/hammer/hammer.js') }}"></script>
        <script src="{{ url('/assets/vendor/libs/i18n/i18n.js') }}"></script>
        <script src="{{ url('/assets/vendor/libs/typeahead-js/typeahead.js') }}"></script>

        <script src="{{ url('/assets/vendor/js/menu.js') }}"></script>
        <!-- endbuild -->

        <!-- Vendors JS -->
        <script src="{{ url('/assets/vendor/libs/formvalidation/dist/js/FormValidation.min.js') }}"></script>
        <script src="{{ url('/assets/vendor/libs/formvalidation/dist/js/plugins/Bootstrap5.min.js') }}"></script>
        <script src="{{ url('/assets/vendor/libs/formvalidation/dist/js/plugins/AutoFocus.min.js') }}"></script>

        <!-- Main JS -->
        <script src="{{ url('/assets/js/main.js') }}"></script>

        <!-- Page JS -->
        <script src="{{ url('/assets/js/pages-auth.js') }}"></script>
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.7.27/dist/sweetalert2.all.min.js"></script>

        @if (session()->has('success'))
            <script>
                Swal.fire({
                    toast: true,
                    position: 'top-end',
                    icon: 'success',
                    title: {!! json_encode(session('success')) !!},
                    showConfirmButton: false,
                    heightAuto: false,
                    timer: 2500
                })
            </script>
        @endif
        @if (session()->has('error'))
            <script>
                Swal.fire({
                    toast: true,
                    position: 'top-end',
                    icon: 'error',
                    title: {!! json_encode(session('error')) !!},
                    showConfirmButton: false,
                    heightAuto: false,
                    timer: 2500
                })
            </script>
        @endif
        @if (session()->has('info'))
            <script>
                Swal.fire({
                    toast: true,
                    position: 'top-end',
                    icon: 'warning',
                    title: {!! json_encode(session('info')) !!},
                    showConfirmButton: false,
                    heightAuto: false,
                    timer: 2500
                })
            </script>
        @endif
</body>

</html>
