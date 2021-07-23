<!DOCTYPE html>
<html lang="zxx">

@include("frontend.components.head")

<body>
<!-- Page Preloder -->

<!-- Header Section Begin -->
@include('frontend.components.header')
<!-- Header End -->

    @yield("main")

<!-- Footer Section Begin -->
@include('frontend.components.footer
')
<!-- Footer Section End -->

<!-- Js Plugins -->
@include("frontend.components.scripts")
</body>

</html>
