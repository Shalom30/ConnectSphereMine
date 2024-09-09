<?php

session_start();

	include("classes/connect.php");
	include("classes/login.php");

	$email = "";
	$password = "";


	if($_SERVER['REQUEST_METHOD'] == 'POST')
	{
		$login = new Login();
		$result = $login->evaluate($_POST);

		if($result != "")
		{
			echo "<div style='text-align: center; font-size: 20px; color: red; background-color: #eee;'>";
			echo "<br>The following errors occured:<br><br>";
			echo $result;
			echo "</div>";
		}
		else
		{
			header("Location: profile.php");
			die;
		}

		$email = $_POST['email'];
		$password = $_POST['password'];

	}

?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>My Book | Login page</title>
	<style>
		#bar{
			height: 100px; 
			background-color: #3c5a99; 
			color: #d9dfeb; 
			font-size: 40px;
			padding: 4px;
		}
		#signup_button{
			font-size: 20px;
			background-color: #42b72a;
			width: 70px;
			text-align: center;
			padding: 4px;
			border-radius: 4px;
			float: right;
		}
		#login_bar{
			background-color: white; 
			width: 800px; 
			margin: auto; 
			margin-top:50px;
			padding: 10px;
			padding-top: 50px;
			text-align: center;
			font-weight: bold;
		}
		#text{
			height: 40px;
			width: 300px;
			border-radius: 4px;
			border: solid 1px #ccc;
			padding: 4px;
			font-size: 14px;
		}
		#button{
			width: 310px;
			height: 40px;
			border-radius: 4px;
			font-weight: bold;
			border: none;
			background-color: #3c5a99; 
			color: white;

		}
	</style>

</head>
<body style="font-family: tahoma; background-color: #e9ebee;">
	<div id="bar">
		<div style="font-size: 40px;"><a href="index.php" style="text-decoration: none; color: white;">CONNECT SPHERE </a></div>
		<a href="sign up page.php">
			<div id="signup_button">Signup</div>
		</a>
	</div>
	<div id="login_bar">
		<form method="post">
			Login to ConnectSphere<br><br>

			<input name="email" value="<?php echo $email ?>"	type="text" id="text" placeholder="Email"><br><br> 
			<input name="password" value="<?php echo $password ?>" type="password" id="text" placeholder="password"><br><br>
			<input type="submit" id="button" value="Log in"><br><br><br><br>

		</form>
	</div>
</body>
</html>