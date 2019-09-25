<!DOCTYPE html>
<html>
	<head>
		<title>Contact | GluMo</title>
		<link rel="shortcut icon" type="image/png" href="favicon.png">
		<link rel="stylesheet" type="text/css" href="./css/contact-style.css">
		<link rel="stylesheet" type="text/css" href="./css/style.css">
	</head>
	<body>
		<div class="topnav">
			<div class="nav-container">
				<a href="webapp.html"><img src="GluMoLoGo(Blue).png" style="width: 200px;">
				</a>
				<div class="topnav-right">
					<a href="about.html">About</a>
					<a href="team.html">Team</a>
					<a href="contact.php">Contact</a>
					<a href="login.html">Log in</a>
				</div>
			</div>
		</div>
		<div class="content-container">
    	<div class="blurb">
        <h1>Contact us</h1>
    	</div>
		</div>
		<?php include('send_email.php'); ?>
		<div class="contact-form">
			<form action="<?= $_SERVER['PHP_SELF']; ?>" method="post">

				<input type="text" id="name" name="name" placeholder="Your name" value="<?= $name ?>" required>
				<span class="error"><?= $name_error ?></span>

				<input type="text" id="email" name="email" placeholder="Your email" value="<?= $email ?>" required>
				<span class="error"><?= $email_error ?></span>

				<textarea type="text" id="message" name="message" placeholder="Let us know what's on your mind" style="height:200px" value="<?= $message ?>"required> </textarea>

				<input type="submit" value="Submit">

				<div class="success"><?= $success; ?></div>
			</form>
		</div>
</html>
