<!DOCTYPE html>
<html lang="en">
<x-head/>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

    <div class="preloader flex-column justify-content-center align-items-center">
        <img class="animation__shake" src="dist/img/AdminLTELogo.png" alt="AdminLTELogo" height="60" width="60">
    </div>

    <x-nav/>

    @yield("main")

    <x-aside/>

    <x-footer/>

</div>

<x-scripts/>

</body>
</html>
