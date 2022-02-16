<?php
ob_start();
session_start();
if (isset($_SESSION['id']) && !empty($_SESSION['id']))
	header('location:home.php');
?>
<!DOCTYPE html>
<html lang="eng">

<head>
	<title>SSCT PERSONNEL PROFILE</title>
	<meta charset="utf-8" />
	<link rel="shortcut icon" href="">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="css/bootstrap.css">
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/login.css">
	<style type="text/css">
		#sidelogin {
			width: 40%;
			float: right;
			position: relative;
			top: 120px;
			right: 20px;
			padding: 10px;
			border-radius: 5px;
			height: 450px;
			background-color: rgba(255, 255, 255, 0.6);
			border: 1px solid #e7e7e7;
		}
	</style>
</head>

<body>
	<div class="navbar navbar-default" style="background-color:#3b5998; padding: 10px;">
		<img src="images/MUNMU_logo.svg" style="float:left;" height="130px" /><span class="navbar-brand" style="text-align: center; font-size: 150%; margin: 3% 10%;">MIRZO ULUG'BEK NOMIDAGI O'ZBEKISTON MILLIY UNVERSITETI KADRLAR TIZIMI</span>
	</div>
	<div id="top" class="login" style="width: 100%; margin: 60px auto; display: flex; justify-content: space-around;">
			<img src="img/admin.webp" alt="admin_image" style="width: 35%;">
		<div class="panel panel-primary" style="width: 35%;">
			<div class="panel-heading">
				<center>
					<h1 class="panel-title">Administrator</h1>
				</center>
			</div>
			<div class="panel-body">
				<form enctype="multipart/form-data" action="login_query.php" role="form" method="POST">
					<div class="form-group">
						<label for="username">Login</label>
						<input class="form-control" name="admin_user" placeholder="Login" type="text" required="required">
					</div>
					<div class="form-group">
						<label for="password">Parol</label>
						<input class="form-control" name="admin_pass" placeholder="Parol" type="password" required="required">
					</div>
					<div class="form-group">
						<button class="btn btn-block btn-success" name="login"><span class="glyphicon glyphicon-log-in"></span> Login</button>
					</div>
				</form>
			</div>
		</div>
	</div>
	<div class="navbar navbar-default" style="background-color:#3b5998; min-height: 105px;">

	</div>
	<div id="footer">
		<a href="https://dernavuz.netlify.app/" target="_blank" rel="noopener noreferrer">
			<label class="footer-title" style="text-align: center;">&copy; Copyright Navruzbek Daminov 2022</label></a>
	</div>
</body>
<?php
include("script.php");
?>
<script type="text/javascript">
	$(document).ready(function() {
		function disableBack() {
			window.history.forward()
		}

		window.onload = disableBack();
		window.onpageshow = function(evt) {
			if (evt.persisted) disableBack()
		}
	});
</script>

</html>