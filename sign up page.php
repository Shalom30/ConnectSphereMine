<?php

	include("classes/connect.php");
	include("classes/signup.php");

	$first_name = "";
	$last_name = "";
	$gender = "";
	$email = "";


	if($_SERVER['REQUEST_METHOD'] == 'POST')
	{
		$signup = new Signup();
		$result = $signup->evaluate($_POST);

		if($result != "")
		{
			echo "<div style='text-align: center; font-size: 20px; color: red; background-color: #eee;'>";
			echo "<br>The following errors occured:<br><br>";
			echo $result;
			echo "</div>";
		}
		else
		{
			header("Location: login.php");
			die;
		}

		$first_name = $_POST['first_name'];
		$last_name = $_POST['last_name'];
		$gender = $_POST['gender'];
		$email = $_POST['email'];

	}




?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>My ConnectSphere | Sign Up page</title>
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
		<div style="font-size: 40px;"><a href="index.php" style="text-decoration: none; color: white;"> ConnectSphere </a></div>
		<a href="login.php">
			<div id="signup_button">Log in</div>
		</a>
	</div>
	<div id="login_bar">
		Sign Up to ConnectSphere<br><br>

		<form method="post" action="">

			<input value = "<?php echo $first_name ?>" name="first_name" type="text" id="text" placeholder="First name"><br><br>
			<input value = "<?php echo $last_name ?>" name="last_name" type="text" id="text" placeholder="Last name"><br><br>

			<span style="font-weight: normal;">Gender:</span><br>
			<select name="gender" id="text">
				<option><?php echo $gender ?></option>
				<option>Male</option>
				<option>Female</option>
			</select>
			<br><br>
			<input value = "<?php echo $email ?>"name="email" type="text" id="text" placeholder="Email"><br><br>

			<input name="password" type="password" id="text" placeholder="password"><br><br>
			<input name="password2" type="password" id="text" placeholder="Retype password"><br><br>
			<input type="submit" id="button" value="Sign up"><br><br><br><br>

		</form>
	</div>
</body>
</html>