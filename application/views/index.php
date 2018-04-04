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
	<div class="mdl-layout mdl-js-layout mdl-color--grey-100">
		<main class="mdl-layout__content">
			<div class="mdl-card mdl-shadow--6dp">
				<div class="mdl-card__title mdl-color--primary mdl-color-text--white">
					<h2 class="mdl-card__title-text">SISTIK</h2>
				</div>
				<div class="mdl-card__supporting-text">
					<form action="<?php echo base_url();?>index.php/c_login/auth" method="post">
						<div class="mdl-textfield mdl-js-textfield">
							<input class="mdl-textfield__input" type="text" id="username" />
							<label class="mdl-textfield__label" for="username">Username</label>
						</div>
						<div class="mdl-textfield mdl-js-textfield">
							<input class="mdl-textfield__input" type="password" id="userpass" />
							<label class="mdl-textfield__label" for="userpass">Password</label>
						</div>
					</form>
				</div>
				<div class="mdl-card__actions mdl-card--border">
					<button class="mdl-button mdl-button--colored mdl-js-button mdl-js-ripple-effect">Log in</button>
				</div>
			</div>
		</main>
	</div>
	<main>
	
		<!-- <div>
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
	</main> -->
</body>

</html>