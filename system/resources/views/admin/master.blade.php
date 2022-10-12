<!doctype html>
<html lang="en">

<head>

    <meta charset="utf-8" />
    <title>Minia - Minimal Admin & Dashboard Template</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
    <meta content="Themesbrand" name="author" />
    <!-- App favicon -->
    <link rel="shortcut icon" href="{{ url('public') }}/assets-super-admin/images/favicon.ico">

    <!-- plugin css -->
    <link
        href="{{ url('public') }}/assets-super-admin/libs/admin-resources/jquery.vectormap/jquery-jvectormap-1.2.2.css"
        rel="stylesheet" type="text/css" />

    <!-- preloader css -->
    <link rel="stylesheet" href="{{ url('public') }}/assets-super-admin/css/preloader.min.css" type="text/css" />

    <!-- Bootstrap Css -->
    <link href="{{ url('public') }}/assets-super-admin/css/bootstrap.min.css" id="bootstrap-style" rel="stylesheet"
        type="text/css" />
    <!-- Icons Css -->
    <link href="{{ url('public') }}/assets-super-admin/css/icons.min.css" rel="stylesheet" type="text/css" />
    <!-- App Css-->
    <link href="{{ url('public') }}/assets-super-admin/css/app.min.css" id="app-style" rel="stylesheet"
        type="text/css" />
    <!-- DataTables -->
    <link href="{{ url('public') }}/assets-super-admin/libs/datatables.net-bs4/css/dataTables.bootstrap4.min.css"
        rel="stylesheet" type="text/css" />
    <link href="{{ url('public') }}/assets-super-admin/libs/datatables.net-buttons-bs4/css/buttons.bootstrap4.min.css"
        rel="stylesheet" type="text/css" />

    <!-- Responsive datatable examples -->
    <link
        href="{{ url('public') }}/assets-super-admin/libs/datatables.net-responsive-bs4/css/responsive.bootstrap4.min.css"
        rel="stylesheet" type="text/css" />

</head>

<body>

    <!-- Begin page -->
    <div id="layout-wrapper">

        @include('admin.section.header')

        <!-- ========== Left Sidebar Start ========== -->
        @include('admin.section.sidebar')
        <!-- Left Sidebar End -->

        <!-- ============================================================== -->
        <!-- Start right Content here -->
        <!-- ============================================================== -->
        <div class="main-content">

            <div class="page-content">
                <div class="container-fluid">
                    @yield('content')
                </div>
                <!-- container-fluid -->
            </div>
            <!-- End Page-content -->

            @include('admin.section.footer')

        </div>
        <!-- end main content-->

    </div>
    <!-- END layout-wrapper -->


    <!-- Right Sidebar -->
    @include('admin.section.rightbar')
    <!-- /Right-bar -->

    <!-- Right bar overlay-->
    <div class="rightbar-overlay"></div>

    <!-- JAVASCRIPT -->
    <script src="{{ url('public') }}/assets-super-admin/libs/jquery/dist/jquery.min.js"></script>
    <script src="{{ url('public') }}/assets-super-admin/libs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <script src="{{ url('public') }}/assets-super-admin/libs/metismenu/dist/metisMenu.min.js"></script>
    <script src="{{ url('public') }}/assets-super-admin/libs/simplebar/dist/simplebar.min.js"></script>
    <script src="{{ url('public') }}/assets-super-admin/libs/node-waves/dist/waves.min.js"></script>
    <script src="{{ url('public') }}/assets-super-admin/libs/feather-icons/dist/feather.min.js"></script>
    <!-- pace js -->
    <script src="{{ url('public') }}/assets-super-admin/libs/pace-js/pace.min.js"></script>

    <!-- apexcharts -->
    <script src="{{ url('public') }}/assets-super-admin/libs/apexcharts/dist/apexcharts.min.js"></script>

    <!-- Plugins js-->
    <script
        src="{{ url('public') }}/assets-super-admin/libs/admin-resources/jquery.vectormap/jquery-jvectormap-1.2.2.min.js">
    </script>
    <script
        src="{{ url('public') }}/assets-super-admin/libs/admin-resources/jquery.vectormap/maps/jquery-jvectormap-world-mill-en.js">
    </script>

    <!-- dashboard init -->
    <script src="{{ url('public') }}/assets-super-admin/js/pages/dashboard.init.js"></script>
    <script src="{{ url('public') }}/assets-super-admin/js/app.js"></script>

    <!-- Required datatable js -->
    <script src="{{ url('public') }}/assets-super-admin/libs/datatables.net/js/jquery.dataTables.min.js"></script>
    <script src="{{ url('public') }}/assets-super-admin/libs/datatables.net-bs4/js/dataTables.bootstrap4.min.js"></script>
    <!-- Buttons examples -->
    <script src="{{ url('public') }}/assets-super-admin/libs/datatables.net-buttons/js/dataTables.buttons.min.js"></script>
    <script src="{{ url('public') }}/assets-super-admin/libs/datatables.net-buttons-bs4/js/buttons.bootstrap4.min.js">
    </script>
    <script src="{{ url('public') }}/assets-super-admin/libs/jszip/dist/jszip.min.js"></script>
    <script src="{{ url('public') }}/assets-super-admin/libs/pdfmake/build/pdfmake.min.js"></script>
    <script src="{{ url('public') }}/assets-super-admin/libs/pdfmake/build/vfs_fonts.js"></script>
    <script src="{{ url('public') }}/assets-super-admin/libs/datatables.net-buttons/js/buttons.html5.min.js"></script>
    <script src="{{ url('public') }}/assets-super-admin/libs/datatables.net-buttons/js/buttons.print.min.js"></script>
    <script src="{{ url('public') }}/assets-super-admin/libs/datatables.net-buttons/js/buttons.colVis.min.js"></script>

    <!-- Responsive examples -->
    <script src="{{ url('public') }}/assets-super-admin/libs/datatables.net-responsive/js/dataTables.responsive.min.js">
    </script>
    <script
        src="{{ url('public') }}/assets-super-admin/libs/datatables.net-responsive-bs4/js/responsive.bootstrap4.min.js">
    </script>

    <!-- Datatable init js -->
    <script src="{{ url('public') }}/assets-super-admin/js/pages/datatables.init.js"></script>

    <script>
        $(".datatable").DataTable();
    </script>

</body>

</html>
