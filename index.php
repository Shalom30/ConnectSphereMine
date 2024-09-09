<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>SpaceConnect</title>

	<style>
		*{
			text-decoration: none;
			margin: 0px;
			font-family: "Arial";

		}
		
		body
		{
			min-height: 100%;
			display: flex;
			flex-direction: column;
		}
		.navbar
		{
			font-family: "Arial";
			padding-right: 15px;
			padding-left: 15px;
		}
		.navdiv
		{
			display: flex;
			align-items: center;
			justify-content: space-between;

		}
		li
		{
			listy-style: none;
			display: inline-block;
			padding-top: 8px;
		}
		li a
		{
			font-size: 18px;
			margin-right: 60px;
			font-weight: bold;
			color: white;

		}
		li a:hover
		{
			color: #E80F92;
			transition: color .1s;
		}
		#signup_btn{
			font-size: 16px;
			background-color: white;
			width: 60px;
			text-align: center;
			padding: 10px 30px;
			border-radius: 23px;
			float: right;
			color: white;
			
			font-weight: bold;
			margin-left: 20px;
			color: #3750D6;
			border: solid;
			border-color: #3750D6;
			border-width: thin;
			transition: background-color .3s, color .3s, border .3s;

		}
		#signup_btn:hover
		{
			border: none;
			
			background-color: #3750D6;
			color: white;
			cusor: pointer;
			
		}

		.body_part
		{
			min-width: auto;
			min-height: 800px;
/*			background-image: url(html_images/image1.webp);*/
			/*background-repeat: no-repeat;
			background-size: 2000px;*/
			color: white;
			text-align: center;
			padding-top: 250px;
			background-color: rgba(0, 0, 0, .5);
			background-blend-mode: darken;
			position: relative;

		}
		/*.body_part:hover
		{
			background-size: 2000px;
			background-image: url(html_images/image2.avif);

		}*/
		
		.background
		{
			position: absolute;
			right: 0px;
			bottom: 0px;
			z-index: -1;
			width: 122.5%;

		}
		#signup_btn2{
			font-size: 20px;
/*			background-color: black;*/
			width: 60px;
			text-align: center;
			padding: 14px 70px;
			border-radius: 23px;
			float: right;
			color: #3BDE19;
			font-weight: bold;
			margin-left: 20px;
			border: solid;
			border-width: thin;
			border-color: #3BDE19;
			transition: background-color .3s, color .3s, border .3s, border-color .3s;
		}
		#signup_btn2:hover
		{
			border: none;
			
			background-color: #3BDE19;
			color: white;
			cusor: pointer;
			
		}
		.buttom
		{
			min-height: 500px;
			min-width: auto;
		}
		.image
		{
			display: flex;
		}
		.text_r
		{
			min-height: 100px;
			display: inline-block;
			text-align: center;
			padding-top: 130px;
		}
		.btns
		{
			min-height: 60px;
			min-width: auto;
			display: flex;
 			align-items: center;
  			justify-content: center;
		}
	</style>
</head>
<body>
	<nav class="navbar">
		<div class="navdiv">
			<!-- top bar -->
			<div class="logo"><a href="index.php"><img src="html_images/logo.png" style="height: 70px; width: 100px; object-fit: cover;"></a></div>
			<ul>

				<li><a href="index.php">Home</a></li>
				<li><a href="about.php">About Us</a></li>

				<a href="sign up page.php">
					<div id="signup_btn">Signup</div>
				</a>
				<a href="login.php">
					<div id="signup_btn">Log in</div>
				</a>
			</ul>
		</div>
	</nav>

	<!-- body part -->
	<div class="body_part">
		<video autoplay loop muted plays-inline class="background">
			<source src="html_images/video_background2.mp4" type="video/mp4">
		</video>
		<span style="font-weight: bold; font-size: 150px;">WELCOME TO Connect<span style="color: #3BDE19;">Sphere</span></span>
		<br><br><br><br>
		<p style="font-size: 40px;">"We are here to make you feel closer to<span style="color: #3BDE19;"><br>everyone no mater where you are"</span></p>
		<br><br><br><br>
		<div class="btns">
			<a href="sign up page.php">
			<div id="signup_btn2"  style="">Register</div>
		</a>
		<a href="login.php">
			<div id="signup_btn2" style="">Log in</div>
		</a>
		</div>
		<br><br><br><br><br>
		<p style="font-size: 25px; color: white;">Join us now and you won't regret it!!</p>
	</div>
	<div class="buttom">
		<div class="image">
			<img src="html_images/interconnect.jpg" style="width: 50%; object-fit: contain;">
			<div class="text_r">
				<span style="font-weight: bold; font-size: 100px;"><span style="color: #3BDE19; min-width: auto;">Your Relationships</span> <span style="color: #3750D6;">Matters Most To Us</span></span>
			</div>
		</div>
		<div class="pic">
			<img src="html_images/real_connect.jpg" style="height: 600px; width: 1300px; object-fit: contain; margin-left: 50px;">
		</div>
		<div style="min-height: 100px; background-color: #3D71BD; width: auto; text-align: center; color: white; padding-top: 50px;">
			<span style="font-weight: bold; font-size: 40px;">Contact us</span>
			<div>
				wepngongshalom23@gmail.com
			</div>
		</div>
	</div>
</body>
</html>

<!-- style="height: 300px; width: 300px; object-fit: contain; -->