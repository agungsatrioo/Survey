<!doctype html>

<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="description" content="A front-end template that helps you build fast, modern mobile web apps.">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0">
	<title>SISTIK</title>
	<meta name="mobile-web-app-capable" content="yes">
	<link rel="icon" sizes="192x192" href="images/android-desktop.png">
	<meta name="apple-mobile-web-app-capable" content="yes">
	<meta name="apple-mobile-web-app-status-bar-style" content="black">
	<meta name="apple-mobile-web-app-title" content="Material Design Lite">
	<link rel="apple-touch-icon-precomposed" href="images/ios-desktop.png">
	<meta name="msapplication-TileImage" content="images/touch/ms-touch-icon-144x144-precomposed.png">
	<meta name="msapplication-TileColor" content="#3372DF">
	<link rel="shortcut icon" href="images/favicon.png">
	<link href="<?php echo base_url();?>assets/css/icon.css" rel="stylesheet">
	<link rel="stylesheet" href="<?php echo base_url()?>assets/css/material.min.css">
	<link rel="stylesheet" href="<?php echo base_url()?>assets/css/styles.css">
</head>

<body>
	<main>
		<div>
			<form action="<?php echo base_url();?>index.php/c_login/create" method="post">
				<div>
					<input type="text" name="username" placeholder="username">
					<input type="password" name="password" placeholder="password">
					<select name="level" id="">
						<option value="1">Admin</option>
						<option value="2">User</option>
					</select>
					<input type="submit" name="submit" value="Sign Up">
				</div>
			</form>
		</div>
		<div>
			<form action="<?php echo base_url();?>index.php/c_login/auth" method="post">
				<div>
					<input type="text" name="username" placeholder="username">
					<input type="password" name="password" placeholder="password">
					<input type="submit" name="submit" value="Sign In">
				</div>
			</form>
		</div>
	</main>
</body>

</html>