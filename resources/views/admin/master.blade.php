<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="icon" href="{{ asset('/') }}admin/assets/images/favicon-32x32.png" type="image/png" />
  <!--plugins-->
  <link href="{{ asset('/') }}admin/assets/plugins/vectormap/jquery-jvectormap-2.0.2.css" rel="stylesheet"/>
  <link href="{{ asset('/') }}admin/assets/plugins/simplebar/css/simplebar.css" rel="stylesheet" />
  <link href="{{ asset('/') }}admin/assets/plugins/perfect-scrollbar/css/perfect-scrollbar.css" rel="stylesheet" />
  <link href="{{ asset('/') }}admin/assets/plugins/metismenu/css/metisMenu.min.css" rel="stylesheet" />
  <!-- Bootstrap CSS -->
  <link href="{{ asset('/') }}admin/assets/css/bootstrap.min.css" rel="stylesheet" />
  <link href="{{ asset('/') }}admin/assets/css/bootstrap-extended.css" rel="stylesheet" />
  <link href="{{ asset('/') }}admin/assets/css/style.css" rel="stylesheet" />
  <link href="{{ asset('/') }}admin/assets/css/icons.css" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">


  <!-- loader-->
	<link href="{{ asset('/') }}admin/assets/css/pace.min.css" rel="stylesheet" />

  <!--Theme Styles-->
  <link href="{{ asset('/') }}admin/assets/css/dark-theme.css" rel="stylesheet" />
  <link href="{{ asset('/') }}admin/assets/css/light-theme.css" rel="stylesheet" />
  <link href="{{ asset('/') }}admin/assets/css/semi-dark.css" rel="stylesheet" />
  <link href="{{ asset('/') }}admin/assets/css/header-colors.css" rel="stylesheet" />
  <!-- Onedash -  -->
  <title>Bootstrap 5 Admin Template</title>
</head>

<body>

    @yield('body')
  <!-- Bootstrap bundle JS -->
  <script src="{{ asset('/') }}admin/assets/js/bootstrap.bundle.min.js"></script>
  <!--plugins-->
  <script src="{{ asset('/') }}admin/assets/js/jquery.min.js"></script>
  <script src="{{ asset('/') }}admin/assets/plugins/simplebar/js/simplebar.min.js"></script>
  <script src="{{ asset('/') }}admin/assets/plugins/metismenu/js/metisMenu.min.js"></script>
  <script src="{{ asset('/') }}admin/assets/plugins/perfect-scrollbar/js/perfect-scrollbar.js"></script>
  <script src="{{ asset('/') }}admin/assets/plugins/vectormap/jquery-jvectormap-2.0.2.min.js"></script>
  <script src="{{ asset('/') }}admin/assets/plugins/vectormap/jquery-jvectormap-world-mill-en.js"></script>
  <script src="{{ asset('/') }}admin/assets/js/pace.min.js"></script>
  <script src="{{ asset('/') }}admin/assets/plugins/chartjs/js/Chart.min.js"></script>
  <script src="{{ asset('/') }}admin/assets/plugins/chartjs/js/Chart.extension.js"></script>
  <script src="{{ asset('/') }}admin/assets/plugins/apexcharts-bundle/js/apexcharts.min.js"></script>
  <!--app-->
  <script src="{{ asset('/') }}admin/assets/js/app.js"></script>
  <script src="{{ asset('/') }}admin/assets/js/index.js"></script>
  <script>
    new PerfectScrollbar(".best-product")
 </script>


</body>

</html>
