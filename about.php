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
			color: black;

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

		}
		#signup_btn:hover
		{
			border: none;
			
			background-color: #3750D6;
			color: white;
			cusor: pointer;
			transition: background-color .3s, color .3s, border .3s;
		}

		.body_part
		{
			min-width: auto;
			min-height: 100px;
			background-image: url(html_images/image1.webp);
			background-repeat: no-repeat;
			background-size: 100%;
			color: white;
			text-align: center;
			padding-top: 250px;
			
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
		}
		#signup_btn2:hover
		{
			border: none;
			
			background-color: #3BDE19;
			color: white;
			cusor: pointer;
			transition: background-color .3s, color .3s, border .3s, border-color .3s;
		}
		.buttom
		{
			min-height: 1000px;
			display: grid;
			text-align: center;
		}
		.element
		{
			margin-top: 50px;
			margin-right: 20px;
			display: inline-block;
			min-height: 100px;
			min-width: 60px;
			max-width: 300px;
			box-shadow: 0px 5px 5px black;
			transition: box-shadow .3s;
			
		}
		.element:hover
		{
			cursor: pointer;
			box-shadow: 0px 15px 8px black;
			
		}
		.text
		{
			margin-top: 20px;
			font-size: 20px;
			margin-bottom: 20px;
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
				<li><a href="#">About Us</a></li>

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
		<span style="text-align: center; font-size: 60px; ">Meet Our <span style="color: #3BDE19">Team</span></span>
	</div>
	<!-- this is for the image card -->
	<div class="buttom">
		<div class="grid">
			<div class="element">
				<div class="image"><img src="html_images/shalom.jpg" style="height: 300px; width: 300px; object-fit: cover;"></div>
				<div class="text">Hey! <br>my name is Wepngong Shalom and I was the group leader on this project and i worked on the back-end of this project</div>
			</div>

			<!-- second person -->
			<div class="element">
				<div class="image"><img src="html_images/ashanti.jpg" style="height: 300px; width: 300px; object-fit: cover;"></div>
				<div class="text">Hey! <br>my name is Ashanti and I worked on the front-end design</div>
			</div>
			<!-- third person -->
			<div class="element">
				<div class="image"><img src="html_images/tresure.jpg" style="height: 300px; width: 300px; object-fit: cover;"></div>
				<div class="text">Hey! <br>my name is Tresure and I worked on the front-end design</div>
			</div>
			<!-- fouth person -->
			<div class="element">
				<div class="image"><img src="html_images/paola.jpg" style="height: 300px; width: 300px; object-fit: cover;"></div>
				<div class="text">Hey! <br>my name is Paola and I worked on the front-end design</div>
			</div>
			<!-- fifth person -->
			<div class="element">
				<div class="image"><img src="html_images/byron.jpg" style="height: 300px; width: 300px; object-fit: cover;"></div>
				<div class="text">Hey! <br>my name is Byron and I worked on the back-end of this project</div>
			</div>
			<!-- sixth person -->
			<div class="element">
				<div class="image"><img src="html_images/melita.jpg" style="height: 300px; width: 300px; object-fit: cover;"></div>
				<div class="text">Hey! <br>my name is Melita and I worked on the front-end design</div>
			</div>
			<!-- seventh person -->
			<div class="element">
				<div class="image"><img src="html_images/Golden.jpg" style="height: 300px; width: 300px; object-fit: cover;"></div>
				<div class="text">Hey! <br>my name is Golden and I worked on the back-end of this project</div>
			</div>
			
		</div>
	</div>
	<div style="min-height: 100px; background-color: #3D71BD; min-width: auto; text-align: center; color: white; padding-top: 50px;">
			<span style="font-weight: bold; font-size: 40px;">Contact us</span>
			<div>
				wepngongshalom23@gmail.com
			</div>
		</div>
</body>
</html>