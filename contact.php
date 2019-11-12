<!DOCTYPE html>
<html>
	<head>
		<title>Contact GluMo</title>
		<link rel="shortcut icon" type="image/png" href="favicon.png">
		<link rel="stylesheet" type="text/css" href="./css/contact-style.css">
		<link rel="stylesheet" type="text/css" href="./css/modal-style.css">
		<link rel="stylesheet" type="text/css" href="./css/style.css">
	</head>
	<body>
		<div class="topnav">
			<div class="nav-container">
				<a href="webapp.html"><img src="GluMoLoGo(Blue).png" style="width: 200px;"></a>
				<div class="topnav-right">
					<a href="about.html">About</a>
					<a href="team.html">Team</a>
					<a href="contact.php">Contact</a>

					<!-- Button to open the modal login form -->
					<button id="modalBtn" class="button">Log in</button>

					<div id="loginModal" class="modal">
						<div class="modal-content">

							<!-- Modal Header -->
							<div class="modal-header">
								<span class="closeBtn">&times;</span>
								<h1>Log in</h1>
							</div>

							<!-- Modal Body -->
							<form class="modal-body animate" action="/action_page.php">
								<div class="login-box">
									<input type="text" name="" placeholder="Email address" required>
									<input type="password" name="" placeholder="Enter your password" required>
									<input type="submit" name="" value="Log in">
								</div>
							</form>

							<!-- Modal Footer -->
							<div class="modal-footer">
								<span class="psw"><a href="#">Forgot password?</a></span>
								<!--<p class="create-account">New to GluMo? <a href="#">Join us today</a></p>-->
							</div>

						</div>
					</div>

					<script src="main.js"></script>
				</div>
			</div>
		</div>
		<!-- Everything above this comment is part of thet navigation bar and on every page -->
		<!------------------------------------------------------------------------------------>
		<!------------------------------------------------------------------------------------>
		<div class="content-header">
      <h1>Contact us</h1>
		</div>
		<?php include('send_email.php'); ?>
		<div class="contact-form">
			<form action="<?= $_SERVER['PHP_SELF']; ?>" method="post">

				<input type="text" id="name" name="name" placeholder="Your name" value="<?= $name ?>" required>
				<span class="error"><?= $name_error ?></span>

				<input type="text" id="email" name="email" placeholder="Your email" value="<?= $email ?>" required>
				<span class="error"><?= $email_error ?></span>

				<textarea type="text" id="message" name="message" placeholder="Let us know what's on your mind" style="height:200px" value="<?= $message ?>"required></textarea>

				<input type="submit" id="submit" value="Submit">

				<div class="success"><?= $success; ?></div>
			</form>
		</div>
		<div class="Logos">
			<a href="https://www.scu.edu/engineering/labs--research/labs/frugal-innovation-hub/"><img src="frugalhub.png" style="width: 400px;">
		</div>
	</body>
</html>
