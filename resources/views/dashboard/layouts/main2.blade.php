<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Dashboard - NiceAdmin Bootstrap Template</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="/img/logo.png" rel="icon">
    <link href="/img/logo.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.gstatic.com" rel="preconnect">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="/backend/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="/backend/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="/backend/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="/backend/vendor/quill/quill.snow.css" rel="stylesheet">
    <link href="/backend/vendor/quill/quill.bubble.css" rel="stylesheet">
    <link href="/backend/vendor/remixicon/remixicon.css" rel="stylesheet">
    <link href="/backend/vendor/simple-datatables/style.css" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="/backend/css/style.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="/css/trix.css">
    <script type="text/javascript" src="/js/trix.js"></script>

    <style>
        .scroll-bg {
            background: whitesmoke;
            width: 950px;
            /* margin: 10%; */
            padding: 10px 20px;
            border-radius: 30px;
        }

        .scroll-div {
            width: 900px;
            background: whitesmoke;
            height: 300px;
            overflow: hidden;
            overflow-y: scroll;
        }

        .scroll-object {
            color: black;
            font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;
            font-size: 15px;
            padding: 20px;
        }
    </style>

    <!-- =======================================================
  * Template Name: NiceAdmin
  * Updated: Jul 27 2023 with Bootstrap v5.3.1
  * Template URL: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

    <!-- ======= Header ======= -->
    @include('dashboard.layouts.header2')
    <!-- End Header -->

    <!-- ======= Sidebar ======= -->
    @include('dashboard.layouts.sidebar2')
    <!-- End Sidebar-->

    <main id="main" class="main">
        @yield('container')
    </main><!-- End #main -->

    <!-- Vendor JS Files -->
    <script src="/backend/vendor/apexcharts/apexcharts.min.js"></script>
    <script src="/backend/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="/backend/vendor/chart.js/chart.umd.js"></script>
    <script src="/backend/vendor/echarts/echarts.min.js"></script>
    <script src="/backend/vendor/quill/quill.min.js"></script>
    <script src="/backend/vendor/simple-datatables/simple-datatables.js"></script>
    <script src="/backend/vendor/tinymce/tinymce.min.js"></script>
    <script src="/backend/vendor/php-email-form/validate.js"></script>

    <!-- Template Main JS File -->
    <script src="/backend/js/main.js"></script>

</body>

</html>