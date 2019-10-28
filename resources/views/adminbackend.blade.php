<!DOCTYPE html>
<html dir="ltr" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="{{asset('assets/backend/assets/images/favicon.png')}}">
    <title>Dashboard Backend</title>
    <!-- Custom CSS -->
    <link href="{{asset('assets/backend/assets/libs/chartist/dist/chartist.min.css')}}" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="{{asset('assets/backend/dist/css/style.min.css')}}" rel="stylesheet"> 
    <link rel="stylesheet" href="{{asset('DataTables/dt/css/dataTables.bootstrap4.min.css')}}">
    <link rel="stylesheet" href="{{asset('DataTables/datatables.min.css')}}">
    @yield('css')
</head>

<body>
    <div class="preloader">
        <div class="lds-ripple">
            <div class="lds-pos"></div>
            <div class="lds-pos"></div>
        </div>
    </div>
    <div id="main-wrapper" data-layout="vertical" data-navbarbg="skin5" data-sidebartype="full" data-sidebar-position="absolute" data-header-position="absolute" data-boxed-layout="full">
        @include('layouts.backend.headersidebar')
        <div class="page-wrapper">
            <div class="page-breadcrumb">
                <div class="row align-items-center">
                    <div class="col-5">
                        <h4 class="page-title">Dashboard</h4>
                        <div class="d-flex align-items-center">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    @yield('flash')
                                </ol>
                            </nav>
                        </div>
                    </div>
                    <div class="col-7">
                        <div class="text-right upgrade-btn">
                           
                        </div>
                    </div>
                </div>
            </div>
            <div class="container-fluid">
                    @yield('content')
            </div>
        </div>
    </div>
    <script src="{{asset('assets/backend/assets/libs/jquery/dist/jquery.min.js')}}"></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src="{{asset('assets/backend/assets/libs/popper.js')}}/dist/umd/popper.min.js')}}"></script>
    <script src="{{asset('assets/backend/assets/libs/bootstrap/dist/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('assets/backend/dist/js/app-style-switcher.js')}}"></script>
    <!--Wave Effects -->
    <script src="{{asset('assets/backend/dist/js/waves.js')}}"></script>
    <!--Menu sidebar -->
    <script src="{{asset('assets/backend/dist/js/sidebarmenu.js')}}"></script>
    <!--Custom JavaScript -->
    <script src="{{asset('assets/backend/dist/js/custom.js')}}"></script>
    <!--This page JavaScript -->
    <!--chartis chart-->
    <script src="{{asset('assets/backend/assets/libs/chartist/dist/chartist.min.js')}}"></script>
    <script src="{{asset('assets/backend/assets/libs/chartist-plugin-tooltips/dist/chartist-plugin-tooltip.min.js')}}"></script>
    <script src="{{asset('assets/backend/dist/js/pages/dashboards/dashboard1.js')}}"></script>
    <script src="{{asset('DataTables/dt/js/jquery.dataTables.min.js')}}"></script>
    <script src="{{asset('DataTables/datatables.min.js')}}"></script>
    <script>
    $(document).ready(function() {
    $('#datatable').DataTable();
    });
    </script>
    <script src="/ckeditor/ckeditor.js"></script>
    @yield('js')
    
</body>

</html>