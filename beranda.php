<?php
	session_start();
	if($_SESSION['status_login'] != true){
		echo '<script>window.location="login.php"</script>';
	}
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Homepage</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
</head>
<body>
	<!-- Header -->
	<header>
		<div class="container">
		<h1><a href="beranda.php">Anyaman Tradisional</a></h1>
			<ul>
				<li><a href="beranda.php">Homepage</a></li>
				<li><a href="profile.php">Profile</a></li>
				<li><a href="category.php">Category</a></li>
				<li><a href="products.php">Our Products</a></li>
				<li><a href="logout.php">Logout</a></li>
			</ul>
		</div>
	</header>
	<!-- Content -->
	<div class="section">
		<div class="container">
			<h3>Homepage</h3>
			<div class="box">
				<h4>Selamat datang, <?php echo $_SESSION['a_global']->admin_name ?> di NARA Homemade</h4>
			<br>
				<h5>NARA Homemade menjual berbagai anyaman dari berbagai kota di Indonesia</h5>
			</div>
		</div>
	</div>

	<!-- footer -->
	<footer>
		<div class="container">
			<small>© 2020 NARA Homemade - Kerajinan Tradisional. All rights reserved</small>
	</footer>
</body>
</html>