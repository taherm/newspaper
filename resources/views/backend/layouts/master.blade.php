<!DOCTYPE html>

<html lang="en">
@include('backend.partials.head')

<body class="page-header-fixed page-sidebar-closed-hide-logo page-container-bg-solid">
    @include('backend.partials.header')
    <!-- BEGIN HEADER & CONTENT DIVIDER -->
    <div class="clearfix"> </div>
    <!-- END HEADER & CONTENT DIVIDER -->
    <!-- BEGIN CONTAINER -->
    <div class="page-container">
        @include('backend.partials.sidebar')
        @yield('content')

    </div>
    @if($flash=session('message'))
    <div class="alert alert-success" id="flash-message">
        {{$flash}}
    </div>
    @endif
    <!-- END CONTAINER -->
    @include('backend.partials.footer')
    <!--[if lt IE 9]>
<script src="../assets/global/plugins/respond.min.js"></script>
<script src="../assets/global/plugins/excanvas.min.js"></script> 
<![endif]-->
    @include('backend.partials.scripts')
</body>

</html>