<?php
	session_start();
	include 'db.php'; /*agar query di line 8&9 dapat berjalan */
	if($_SESSION['status_login'] != true){
		echo '<script>window.location="login.php"</script>';
	}

	$query = mysqli_query($conn, "SELECT * FROM tb_admin WHERE admin_id = '".$_SESSION['id']."' ");
	$d = mysqli_fetch_object($query);
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Profile</title>
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
			<h3>Profile</h3>
			<div class="box">
				<form action="" method="POST">
					<input type="text" name="nama" placeholder="Full Name" class="input-control" value=" <?php echo $d->admin_name?>" required>
					<input type="text" name="user" placeholder="Username" class="input-control" value="<?php echo $d->username ?>" required>
					<input type="text" name="hp" placeholder="Phone Number" class="input-control" value="<?php echo $d->admin_telp ?>" required>
					<input type="email" name="email" placeholder="Your E-mail" class="input-control" value="<?php echo $d->admin_email ?>" required>
					<input type="text" name="alamat" placeholder="Address" class="input-control" value="<?php echo $d->admin_address ?>"  required>
					<input type="submit" name="submit" value="Change Profile" class="btn">
				</form>
				<?php
				 if(isset($_POST['submit'])){

				 	$nama   = ucwords($_POST['nama']);
				 	$user   = $_POST['user'];
				 	$hp     = $_POST['hp'];
				 	$email  = $_POST['email'];
				 	$alamat = ucwords($_POST['alamat']);

				 	$update = mysqli_query($conn, "UPDATE tb_admin SET 
				 		admin_name = '".$nama."',
				 		username = '".$user."',
				 		admin_telp = '".$hp."',
				 		admin_email = '".$email."',
				 		admin_address = '".$alamat."'
				 		WHERE admin_id = '".$d->admin_id."' ");
					if ($update) {
				 		echo '<script>alert("Your data has changed successfully")</script>';
				 		echo '<script>window.location="profile.php"</script>';
				 	} else {
				 		echo 'failed'.mysqli_error($conn);
				 	}

				 }
				 ?>
			</div>

			<h3>Change Password</h3>
			<div class="box">
				<form action="" method="POST">
					<input type="text" name="nama" placeholder="Full Name" class="input-control" value=" <?php echo $d->admin_name ?>" required>
					<input type="text" name="user" placeholder="Username" class="input-control" value="<?php echo $d->username ?>" required>
					<input type="text" name="hp" placeholder="Phone Number" class="input-control" value="<?php echo $d->admin_telp ?>" required>
					<input type="email" name="email" placeholder="Your E-mail" class="input-control" value="<?php echo $d->admin_email ?>" required>
					<input type="text" name="alamat" placeholder="Address" class="input-control" value="<?php echo $d->admin_address ?>"  required>
					<input type="submit" name="submit" value="Change Profile" class="btn">
				</form>
				<?php
				 if(isset($_POST['submit'])){

				 	$nama   = ucwords($_POST['nama']);
				 	$user   = $_POST['user'];
				 	$hp     = $_POST['hp'];
				 	$email  = $_POST['email'];
				 	$alamat = ucwords($_POST['alamat']);

				 	$update = mysqli_query($conn, "UPDATE tb_admin SET 
				 		admin_name = '".$nama."',
				 		username = '".$user."',
				 		admin_telp = '".$hp."',
				 		admin_email = '".$email."',
				 		admin_address = '".$alamat."'
				 		WHERE admin_id = '".$d->admin_id."' ");
					if ($update) {
				 		echo '<script>alert("Your data has changed successfully")</script>';
				 		echo '<script>window.location="profile.php"</script>';
				 	} else {
				 		echo 'failed'.mysqli_error($conn);
				 	}

				 }
				 ?>
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