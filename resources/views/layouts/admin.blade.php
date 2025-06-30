<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from sego.dexignzone.com/xhtml/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 23 May 2025 19:08:21 GMT -->

<head>
    <!-- Title -->
    <title>Delici Restaurants Admin Dashboard</title>

    <!-- Meta -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="author" content="DexignZone">
    <meta name="robots" content="">

    <meta name="keywords"
        content="	admin dashboard, admin template, administration, analytics, bootstrap, cafe admin, elegant, food, health, kitchen, modern, responsive admin dashboard, restaurant dashboard, restaurant, chef, customer, breakfast, fastfood, nutrition,">
    <meta name="description"
        content="Experience the ultimate in restaurant management with Sego - the Restaurant Bootstrap Admin Dashboard. Streamline your restaurant operations, from reservations to menu updates, with this powerful and user-friendly admin tool. Elevate your dining experience today.">

    <meta property="og:title" content="Sego - Restaurant Admin Dashboard Bootstrap HTML Template">
    <meta property="og:description"
        content="Experience the ultimate in restaurant management with Sego - the Restaurant Bootstrap Admin Dashboard. Streamline your restaurant operations, from reservations to menu updates, with this powerful and user-friendly admin tool. Elevate your dining experience today.">
    <meta property="og:image" content="social-image.png">
    <meta name="format-detection" content="telephone=no">

    <!-- Mobile Specific -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="{{asset('admin_assets/images/favicon.png')}}">
    <link rel="stylesheet" href="{{asset('admin_assets/vendor/chartist/css/chartist.min.css')}}">
    <link href="{{asset('admin_assets/vendor/bootstrap-select/dist/css/bootstrap-select.min.css')}}" rel="stylesheet">
    <link href="{{asset('admin_assets/vendor/bootstrap-datepicker-master/css/bootstrap-datepicker.min.css')}}"
        rel="stylesheet">
    <link href="{{asset('admin_assets/css/style.css')}}" rel="stylesheet">
    <link
        href="{{asset('admin_assets/https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&amp;family=Roboto:wght@100;300;400;500;700;900&amp;display=swap')}}"
        rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
</head>

<body>

    <!--*******************
        Preloader start
    ********************-->
    <div id="preloader">
        <div class="sk-three-bounce">
            <div class="sk-child sk-bounce1"></div>
            <div class="sk-child sk-bounce2"></div>
            <div class="sk-child sk-bounce3"></div>
        </div>
    </div>
    <!--*******************
        Preloader end
    ********************-->


    <!--**********************************
        Main wrapper start
    ***********************************-->
    <div id="main-wrapper">
        @include('snippets.admin-sidebar')
        @include('snippets.admin-header')

        <div class="content-body">
            <div class="container-fluid">
                @yield('content')
            </div>
        </div>
        @include('snippets.admin-footer')
    </div>
    <!--**********************************
        Main wrapper end
    ***********************************-->
    <!--**********************************
        Scripts
    ***********************************-->
    <!-- Required vendors -->
    <script src="{{asset('admin_assets/vendor/global/global.min.js')}}"></script>
    <script src="{{asset('admin_assets/vendor/bootstrap-select/dist/js/bootstrap-select.min.js')}}"></script>
    <script src="{{asset('admin_assets/vendor/bootstrap-datepicker-master/js/bootstrap-datepicker.min.js')}}"></script>
    <script src="{{asset('admin_assets/vendor/chart.js/Chart.bundle.min.js')}}"></script>
    <script src="{{asset('admin_assets/js/custom.min.js')}}"></script>
    <script src="{{asset('admin_assets/js/deznav-init.js')}}"></script>

    <!-- Chart piety plugin files -->
    <script src="{{asset('admin_assets/vendor/peity/jquery.peity.min.js')}}"></script>

    <!-- Apex Chart -->
    <script src="{{asset('admin_assets/vendor/apexchart/apexchart.js')}}"></script>

    <!-- Dashboard 1 -->
    <script src="{{asset('admin_assets/js/dashboard/dashboard-1.js')}}"></script>



</body>

<!-- Mirrored from sego.dexignzone.com/xhtml/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 23 May 2025 19:09:13 GMT -->

</html>
