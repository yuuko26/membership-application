<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
{{--    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('images/icon/logo.svg') }}">--}}

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- BOOTSTRAP CSS -->
    <link id="style" href="{{asset('assets/plugins/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
    <!-- ICONS CSS -->
    <link href="{{asset('assets/iconfonts/icons.css')}}" rel="stylesheet">
    <!-- ANIMATE CSS -->
    <link href="{{asset('assets/iconfonts/animate.css')}}" rel="stylesheet">

    <!-- APP SCSS & APP CSS -->
    <link rel="preload" as="style" href="{{asset('assets/app1.css')}}" />
    <link rel="preload" as="style" href="{{asset('assets/app2.css')}}" />
    <link rel="stylesheet" href="{{asset('assets/app1.css')}}" />
    <link rel="stylesheet" href="{{asset('assets/app2.css')}}" />

    <!-- DATATABLES CSS -->
    <link href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css" rel="stylesheet" />

    <style>
        .select2-search__field {
            width:100% !important;
        }
        .file-upload {
            height: 100px  !important;
            width: 100px  !important;
            /* border-radius: 100px  !important; */
            border-radius: 0.75rem  !important;
            position: relative  !important;
            display: flex  !important;
            justify-content: center  !important;
            align-items: center  !important;
            border: 1px solid #f0f1f5  !important;
            overflow: hidden  !important;
            /* background-image: linear-gradient(to bottom, #2590EB 50%, #FFFFFF 50%)  !important; */
            background-color: #FFFFFF  !important;
            background-size: 100% 200%  !important;
            transition: all 1s  !important;
            color: #2590EB  !important;
            font-size: 20px  !important;
        }
        .file-upload input[type='file'] {
            height: 100px  !important;
            width: 100px  !important;
            position: absolute  !important;
            top: 0  !important;
            left: 0  !important;
            opacity: 0  !important;
            cursor: pointer  !important;
        }
        .file-upload.file-small  input[type='file'] {
            height: 50px  !important;
            width: 50px  !important;
        }
        .file-upload.file-small {
            height: 50px  !important;
            width: 50px  !important;
            background-color: rgba(0,0,0,0.5) !important;
            color: white !important;
        }
        .file-upload .remove-file {
            position: absolute !important;
            top: 68px !important;
            right: 0px !important;
            left: 60px !important;
            width: 40px !important;
            height: 30px !important;
        }
    </style>

    @stack('livewire-style')
    @stack('style')
</head>
<body class="ltr main-body app sidebar-mini">
    <!--- GLOBAL LOADER -->
    <div id="global-loader" >
        <img src="{{asset('assets/img/svgicons/loader.svg')}}" class="loader-img" alt="loader">
    </div>
    <!--- END GLOBAL LOADER -->

    <div class="page-wrapper page">
        @include('layouts.header')
        @include('partials.sidebar')
        <div class="main-content app-content">
            <div class="main-container container-fluid">
                @yield('content')
            </div>
        </div>
        @include('layouts.footer')
    </div>

    <!-- JQUERY MIN JS -->
    <script src="{{asset('assets/plugins/jquery/jquery.min.js')}}"></script>

    <!-- BOOTSTRAP BUNDLE JS -->
    <script src="{{asset('assets/plugins/bootstrap/js/popper.min.js')}}"></script>
    <script src="{{asset('assets/plugins/bootstrap/js/bootstrap.min.js')}}"></script>

    <!-- MOMENT JS -->
    <script src="{{asset('assets/plugins/moment/moment.js')}}"></script>

    <!-- EVA-ICONS JS -->
    <script src="{{asset('assets/plugins/eva-icons/eva-icons.min.js')}}"></script>

    <!-- PERFECT-SCROLLBAR JS  -->
    <script src="{{asset('assets/plugins/perfect-scrollbar/perfect-scrollbar.min.js')}}"></script>
    <script src="{{asset('assets/plugins/perfect-scrollbar/p-scroll.js')}}"></script>

    <!-- SIDEBAR JS -->
    <script src="{{asset('assets/plugins/sidebar/sidebar.js')}}"></script>
    <script src="{{asset('assets/plugins/sidebar/sidebar-custom.js')}}"></script>

    <!-- SIDEMENU JS -->
    <script src="{{asset('assets/plugins/side-menu/sidemenu.js')}}"></script>

    <!-- SELECT2 JS -->
    <script src="{{asset('assets/plugins/select2/js/select2.min.js')}}"></script>

    <!-- FILEUPLOADS JS -->
    <script src="{{asset('assets/plugins/fileuploads/js/fileupload.js')}}"></script>
    <script src="{{asset('assets/plugins/fileuploads/js/file-upload.js')}}"></script>

    <!-- FANCY UPLOADER JS -->
    <script src="{{asset('assets/plugins/fancyuploder/jquery.ui.widget.js')}}"></script>
    <script src="{{asset('assets/plugins/fancyuploder/jquery.fileupload.js')}}"></script>
    <script src="{{asset('assets/plugins/fancyuploder/jquery.iframe-transport.js')}}"></script>
    <script src="{{asset('assets/plugins/fancyuploder/jquery.fancy-fileupload.js')}}"></script>
    <script src="{{asset('assets/plugins/fancyuploder/fancy-uploader.js')}}"></script>

    <!-- STICKY JS -->
    <script src="{{asset('assets/sticky.js')}}"></script>

    <!-- THEMECOLOR JS -->
    <link rel="modulepreload" href="{{asset('assets/themecolor.js')}}" />
    <link rel="modulepreload" href="{{asset('assets/switcher-styles.js')}}" />
    <link rel="modulepreload" href="{{asset('assets/apexcharts.common.js')}}" />
    <script type="module" src="{{asset('assets/themecolor.js')}}"></script>

    <!-- APP JS -->
    <link rel="modulepreload" href="{{asset('assets/app1.js')}}" />
    <link rel="modulepreload" href="{{asset('assets/switcher-styles.js')}}" />
    <link rel="modulepreload" href="{{asset('assets/apexcharts.common.js')}}" />
    <script type="module" src="{{asset('assets/app1.js')}}"></script>

    <!-- DATATABLE JS -->
    <script src="{{ asset('assets/libs/datatables.net/js/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('assets/libs/datatables.net-bs4/js/dataTables.bootstrap4.min.js') }}"></script>
    <script src="//cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js"></script>
    <script src="https://cdn.datatables.net/select/1.3.0/js/dataTables.select.min.js"></script>

    <!-- Sweet Alerts js -->
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <script>
        $(document).ready(function() {
            $(".select2").select2({
                // placeholder: 'Select an option'
            });
            $(".select2-no-search").select2({
                minimumResultsForSearch: 1 / 0,
                // placeholder: 'Select an option'
            });
        });
    </script>

    @stack('livewire-script')
    @stack('script')
</body>
</html>
