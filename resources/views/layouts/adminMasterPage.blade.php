<!doctype html>
<html class="no-js " lang="en">

<head>
@include('layouts.partials.admin.head')

</head>
<body class="theme-cyan" style="background-color: #eaeaea">
<!-- Page Loader -->
<div class="page-loader-wrapper">
    <div class="loader">
        <div class="m-t-30"><img class="zmdi-hc-spin" src="{{asset('assets/images/logo.svg')}}" width="48" height="48" alt="قطب نما"></div>
        <p>لطفا صبر کنید ...</p>
    </div>
</div>
<!-- Overlay For Sidebars -->
<div class="overlay"></div>
@role('SUPERADMIN|ADMIN')
<!-- Top Bar -->
@include('layouts.partials.admin.header')
<!--Top Bar -->
<!-- Right Sidebar -->
@include('layouts.partials.admin.rightSidebar')
<!-- Left Sidebar -->
@include('layouts.partials.admin.leftSidebar')

<!-- Chat-launcher -->


<!-- Main Content -->
@yield('content')
<!-- Jquery Core Js -->
@include('layouts.partials.admin.script')
<script>

    setMode();

    function setMode() {
        let mode = localStorage.getItem('mode');
        if(!mode) mode = '';
        document.body.classList.add(mode);
    }


    if (localStorage.getItem('mode') === 'menu_dark') {
        document.body.classList.remove('');
        document.body.classList.add('menu_dark');
    } else if (localStorage.getItem('mode') !== 'menu_dark') {
        document.body.classList.remove('menu_dark');
        document.body.classList.add('');
    }

</script>
@yield('script')
@endrole
</body>

</html>
