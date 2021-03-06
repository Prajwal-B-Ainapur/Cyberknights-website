<!DOCTYPE HTML>
<html>
	<head>
		<title>CyberKnights</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<link rel="stylesheet" href="../assets/css/main.css" />
		<link href="assets/css/demo.css" rel="stylesheet" />
	</head>
	<body>

<?php
	session_start();
	if(isset($_SESSION['username']))
		header("Location: welcome.php");
	
	if(isset($_GET['result'])){
	echo '<script type="text/javascript">
			alert("Login Denied");
		</script>';
	}
?>


			<section id="loginFormContainer">
				<center>
				<h2>Login to digi-school portal</h2>
				<p>An CyberKnights Initiative</p>
				<form id="loginForm" action="controller/check.php" method="post">
					<input id="username" name="username" type="text" placeholder="Username" required />
						<br>
					<input id="password" name="password" type="text" maxlength="4" placeholder="PIN" required />
						<br>
					<input id="button" class="button special" type="submit" value="Login"/>
				</form>
			</center>
			</section>
			<!-- Footer -->
			<footer id="footer">
				<div class="inner">
					<div class="flex">
						<div class="copyright">
							<a href="http://www.cyberknights.in">&copy;CyberKnights</a>
						</div>
						<ul class="icons">
							<li><a href="https://www.facebook.com/CyberKnightsHlin/" class="icon fa-facebook" target="_blank"><span class="label">Facebook</span></a></li>
							<li><a href="https://twitter.com/CyberKnights4" class="icon fa-twitter" target="_blank"><span class="label">Twitter</span></a></li>
							<li><a href="https://www.youtube.com/channel/UC3509mOLV67pDqpJOgQ8euQ" class="icon fa-youtube" target="_blank"><span class="label">YouTube</span></a></li>
							<li><a href="http://github.com/cyberknights-team/" class="icon fa-github" target="_blank"><span class="label">GitHub</span></a></li>
						</ul>
					</div>
				</div>
			</footer>
			
		<!-- Scripts -->
			<script src="../assets/js/jquery.min.js"></script>
			<script src="../assets/js/skel.min.js"></script>
			<script src="../assets/js/util.js"></script>
			<script src="../assets/js/main.js"></script>
			<script src="../assets/js/scroll.js"></script>
			
    <!-- Plugin JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
	
	</body>
</html>