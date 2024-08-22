<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="author" content="DexignLab" >
	<meta name="robots" content="" >
	<meta name="keywords" content="school, school admin, education, academy, admin dashboard, college, college management, education management, institute, school management, school management system, student management, teacher management, university, university management" >
	<meta name="description" content="Discover Akademi - the ultimate admin dashboard and Bootstrap 5 template. Specially designed for professionals, and for business. Akademi provides advanced features and an easy-to-use interface for creating a top-quality website with School and Education Dashboard" >
	<meta property="og:title" content="Akademi : School and Education Management Admin Dashboard Template" >
	<meta property="og:description" content="Akademi - the ultimate admin dashboard and Bootstrap 5 template. Specially designed for professionals, and for business. Akademi provides advanced features and an easy-to-use interface for creating a top-quality website with School and Education Dashboard">
	<meta property="og:image" content="https://akademi.dexignlab.com/xhtml/social-image.png" >
	<meta name="format-detection" content="telephone=no">

	<!-- Mobile Specific -->
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!-- Page Title Here -->
	<title>Akademi : School and Education Management Admin Dashboard Template</title>

<!-- FAVICONS ICON -->
	<link rel="shortcut icon" type="image/png" href="../template/images/favicon.png" >
	<link href="../template/vendor/wow-master/css/libs/animate.css" rel="stylesheet">
	<link href="../template/vendor/bootstrap-select/dist/css/bootstrap-select.min.css" rel="stylesheet">
	<link rel="stylesheet" href="../template/vendor/bootstrap-select-country/css/bootstrap-select-country.min.css">
	<link rel="stylesheet" href="../template/vendor/jquery-nice-select/css/nice-select.css">
	<link href="../template/vendor/datepicker/css/bootstrap-datepicker.min.css" rel="stylesheet">
	
	 <link href="../template/vendor/datatables/css/jquery.dataTables.min.css" rel="stylesheet">
	<!--swiper-slider-->
	<link rel="stylesheet" href="../template/vendor/swiper/css/swiper-bundle.min.css">
	<!-- Style css -->
	<link href="../template/vendor/sweetalert2/dist/sweetalert2.min.css" rel="stylesheet">

	<link href="https://fonts.googleapis.com/css2?family=Material+Icons" rel="stylesheet">
    <link href="../template/css/style.css" rel="stylesheet">
	
</head>
<body>

    <!--*******************
        Preloader start
    ********************-->
	<div id="preloader">
	  <div class="loader">
		<div class="dots">
			  <div class="dot mainDot"></div>
			  <div class="dot"></div>
			  <div class="dot"></div>
			  <div class="dot"></div>
			  <div class="dot"></div>
		</div>
			
		</div>
	</div>
    <!--*******************
        Preloader end
    ********************-->
    <!--**********************************
        Main wrapper start
    ***********************************-->
    <div id="main-wrapper" class="wallet-open active">
	
        <!--**********************************
            Nav header start
        ***********************************-->
        <?= $this->include('header') ?>

        <!--**********************************
            Nav header end
        ***********************************-->
		
		<!--**********************************
            Chat box start
        ***********************************-->
	
		<!--**********************************
            Chat box End
        ***********************************-->
		<!--**********************************
            Header start
        ***********************************-->
	
			<!--**********************************
            Header end ti-comment-alt
        ***********************************-->

        <!--**********************************
            Sidebar start
        ***********************************-->
        <?= $this->include('menu') ?>
        <!--**********************************
            Sidebar end
        ***********************************-->
		

		<!--**********************************
            Content body start
        ***********************************-->
        <!--**********************************
            Content body start
        ***********************************-->
        <?= $this->renderSection('contenido_index') ?>
        <!--**********************************
            Content body end
        ***********************************-->
		<!--**********************************
			Footer start
		***********************************-->

        <?= $this->include('footer') ?>

	
    <!--**********************************
        Main wrapper end
    ***********************************-->

<!--***********************************-->

	<!--**********************************
		Modal
	***********************************-->
    <!--**********************************
        Scripts
    ***********************************-->
    <!-- Required vendors -->
    <script src="../template/vendor/global/global.min.js"></script>
	<!-- <script src="../template/vendor/chart.js/Chart.bundle.min.js"></script> -->
	<script src="../template/vendor/bootstrap-select/dist/js/bootstrap-select.min.js"></script>
	<!-- Apex Chart -->
	<!-- <script src="../template/vendor/apexchart/apexchart.js"></script> -->
	<!-- Chart piety plugin files -->
    <script src="../template/vendor/peity/jquery.peity.min.js"></script>
	<script src="../template/vendor/jquery-nice-select/js/jquery.nice-select.min.js"></script>
	<!--swiper-slider-->
	<script src="../template/vendor/swiper/js/swiper-bundle.min.js"></script>
	
	
    <!-- Datatable -->
    <script src="../template/vendor/datatables/js/jquery.dataTables.min.js"></script>
    <!-- <script src="../template/js/plugins-init/datatables.init.js"></script> -->

	<!-- Dashboard 1 -->
	<!-- <script src="../template/js/dashboard/dashboard-1.js"></script> -->
	<script src="../template/vendor/wow-master/dist/wow.min.js"></script>
	<script src="../template/vendor/bootstrap-datetimepicker/js/moment.js"></script>
	<script src="../template/vendor/datepicker/js/bootstrap-datepicker.min.js"></script>
	<script src="../template/vendor/bootstrap-select-country/js/bootstrap-select-country.min.js"></script>

	<script src="../template/vendor/sweetalert2/dist/sweetalert2.all.min.js"></script>
	<script src="../template/js/dlabnav-init.js"></script>
    <script src="../template/js/custom.min.js"></script>
	<!-- <script src="../template/js/demo.js"></script> -->
    <!-- <script src="../template/js/styleSwitcher.js"></script> -->


	<?= $this->renderSection('scripts_personalizados') ?>
	
</body>
</html>