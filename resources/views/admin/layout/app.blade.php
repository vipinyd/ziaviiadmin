<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">
<!-- BEGIN: Head-->

<head>
    @include('admin.layout.head')


</head>
<!-- END: Head-->

<!-- BEGIN: Body-->

<body class="vertical-layout vertical-menu-modern 2-columns  navbar-floating footer-static   menu-collapsed" data-open="click" data-menu="vertical-menu-modern" data-col="2-columns">

    @include('admin.layout.header')


    @include('admin.layout.main')
   

    @yield('content')

    <div class="sidenav-overlay"></div>
    <div class="drag-target"></div>

   
    @include('admin.layout.footer')

    <!-- BEGIN: Vendor JS-->
    <script src="{{asset('assets/app-assets/vendors/js/vendors.min.js')}}"></script>
    <!-- BEGIN Vendor JS-->

    <!-- BEGIN: Page Vendor JS-->
    <script src="{{asset('assets/app-assets/vendors/js/charts/apexcharts.min.js')}}"></script>
    <!-- END: Page Vendor JS-->

    <!-- BEGIN: Theme JS-->
    <script src="{{asset('assets/app-assets/js/core/app-menu.js')}}"></script>
    <script src="{{asset('assets/app-assets/js/core/app.js')}}"></script>
    <script src="{{asset('assets/app-assets/js/scripts/components.js')}}"></script>
    <!-- END: Theme JS-->
    {{-- <script src="{{asset('assets/app-assets/vendors/js/tables/ag-grid/ag-grid-community.min.noStyle.js')}}"></script> --}}
    <!-- BEGIN: datatble JS-->
    <script src="{{asset('assets/app-assets/vendors/js/tables/datatable/datatables.min.js')}}"></script>
    {{-- <script src="{{asset('assets/app-assets/vendors/js/tables/datatable/datatable.min.js')}}"></script> --}}
    {{-- <script src="{{asset('assets/app-assets/js/scripts/datatables/datatable.js')}}"></script>
    <script src="{{asset('assets/app-assets/js/scripts/datatables/datatable.min.js')}}"></script> --}}
    <!-- END: datatable JS-->

    <!-- BEGIN: Page JS-->
    <script src="{{asset('assets/app-assets/js/scripts/pages/dashboard-ecommerce.js')}}"></script>
    <!-- END: Page JS-->
    @yield('scripts')


</body>
<!-- END: Body-->

</html>