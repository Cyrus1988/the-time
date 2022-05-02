@include('admin.layouts.header')
<!-- WRAPPER -->
<div id="wrapper">
    <!-- NAVBAR -->
    @include('admin.components.navbar')
    <!-- END NAVBAR -->
    <!-- LEFT SIDEBAR -->
    @include('admin.components.left-sidebar')
    <!-- END LEFT SIDEBAR -->
    <!-- MAIN CONTENT -->
    @yield('content')
    <!-- END MAIN CONTENT -->
    <div class="clearfix"></div>
    @include('admin.components.footer-rights')
</div>
<!-- END WRAPPER -->
@include('admin.layouts.footer')
