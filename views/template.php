<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Dashboard - Voler Admin Dashboard</title>

	<link rel="stylesheet" href="../assets/css/bootstrap.css">

	<link rel="stylesheet" href="../assets/vendors/chartjs/Chart.min.css">

	<link rel="stylesheet" href="../assets/vendors/perfect-scrollbar/perfect-scrollbar.css">
	<link rel="stylesheet" href="../assets/css/app.css">
	<link rel="shortcut icon" href="../assets/images/favicon.svg" type="image/x-icon">
</head>
<body>
	<div id="app">
		<?php
		include "pages/navs/sidenav.php";
		?>
		<div id="main">
			<?php
			include "pages/navs/header.php";
			include "pages/inicio.php";
			?>
		</div>
	</div>
	<script src="../assets/js/feather-icons/feather.min.js"></script>
	<script src="../assets/vendors/perfect-scrollbar/perfect-scrollbar.min.js"></script>
	<script src="../assets/js/app.js"></script>

	<script src="../assets/vendors/chartjs/Chart.min.js"></script>
	<script src="../assets/vendors/apexcharts/apexcharts.min.js"></script>
	<script src="../assets/js/pages/dashboard.js"></script>

	<script src="../assets/js/main.js"></script>
</body>
</html>
