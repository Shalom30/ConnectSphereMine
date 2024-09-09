<?php

	include("classes/autoload.php");


	$login = new Login();
	$user_data = $login->check_login($_SESSION['mybook_userid']);

	//saving our original user data inother to use his picture as a profile through out
	$USER = $user_data;

	if(isset($_GET['id']) && is_numeric($_GET['id']))
	{
		//cheking the profile we want to access
		$profile = new Profile();
		$profile_data = $profile->get_profile($_GET['id']);

		if(is_array($profile_data))
		{
			$user_data = $profile_data[0];
		}

	}
	

	//posting starts here;
	if($_SERVER['REQUEST_METHOD'] == "POST")
	{

		 $post = new Post();
		 $id = $_SESSION['mybook_userid'];
		 $result = $post->create_post($id, $_POST, $_FILES);

		 //removing the resend message
		 if($result == "")
		 {
		 	header("Location: timeline.php");
		 	die;
		 }
		 else
		 {
		 	echo "<div style='text-align: center; font-size: 20px; color: red; background-color: #eee;'>";
		 	echo "<br>The following errors occured:<br><br>";
		 	echo $result;
		 	echo "</div>";
		 }

	}


?>


<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Time Line | My book</title>
	<style>
		#blue-bar{
			height: 50px;
			background-color: #405d9b;
			color: #d9dfeb;
		}
		#search_box{
			width: 400px;
			height: 20px;
			border-radius: 5px;
			border: none;
			padding: 4px;
			font-size: 14px;
			background-image: url(search.png);
			background-repeat: no-repeat;
			background-position: right; 
			background-size: 30px;
		}
		#profile_pic{
			widtH: 150px;
			height: 150px;
			object-fit: cover;
			border-radius: 50%;
			border: solid 2px white;
		}
		#menu_buttons{
			width: 100px;
			display: inline-block;
			margin: 2px;
		}
		#friends_img{
			width: 75px;
			height: 75px;
			object-fit: cover;
			float: left;
			margin: 8px;
		}
		#friends_bar{
			min-height: 400px;
			margin-top: 20px;
			padding: 8px;
			text-align: center;
			font-size: 20px;
			color: #405d9b;
		}
		#friends{
			clear: both;
			font-size: 12px;
			font-weight: bold;
			color: #405d9b;
		}
		textarea{
			width: 100%;
			border: none;
			font-family: tahoma;
			font-size: 14px;
			height: 60px;
		}
		#post_button{
			float:  right;
			background-color: #405d9b;
			border: none;
			color: white;
			padding: 4px;
			font-size: 14px;
			border-radius: 4px;
			width: 50px;
		}
		#post_bar{
			margin-top: 20px;
			background-color: white;
			padding: 10px;
		}
		#post{
			padding: 4px;
			font-size: 13px;
			display: flex;
			margin-bottom: 20px;
		}
	</style>
</head>
<body style="font-family: tahoma; background-color: #d0d8e4; color: black;"> 

	<br>
	<!--top bar-->
	<?php include("header.php"); ?>
	<!--cover area-->
		<div style="width: 800px; margin: auto; min-height: 400px;">
	

			<!--bellow cover area-->
			<div style="display: flex;">

				<!--friends area-->
				<div style="flex: 1; min-height: 400px;">

					<div id="friends_bar">
							<?php


							$image = "images/user_male.jpg";
							if($user_data['gender'] == "Female")
							{
								$image = "images/user_female.jpg";
							}
							if(file_exists($user_data['profile_image']))
							{
								$image = $image_class->get_thumb_profile($user_data['profile_image']);
							}


						?>

						<img id="profile_pic" src="<?php echo $image ?>"> <br/>
						<a href="profile.php" style="color: #405d9b; text-decoration: none;">
							<?php echo $user_data['first_name']. "<br>" . $user_data['last_name'] ?> 
						</a>
					</div>
				</div>

				<!--post area-->
				<div style="flex: 2.5; min-height: 400px; padding: 20px; padding-right: 0px;">
					
					<div style="border: solid thin #aaa; padding: 10px; background-color: white;">
						<form method="post" enctype="multipart/form-data">
							<textarea name="post" placeholder="Whats on your mind?"></textarea>
							<input type="file" name="file">
							<input type="submit" id="post_button" value="post">
						</form>
						<br>
					</div>

					<!--posts-->
					<div id="post_bar">
						<?php
								$DB = new Database();
								$user_class = new User();
								$image_class = new Image();

								$followers = $user_class->get_following($_SESSION['mybook_userid'], "user");

								$follower_ids = false;
								if(is_array($followers))
								{
									$follower_ids = array_column($followers, "userid");
									$follower_ids = implode("','", $follower_ids);
								}
								if($follower_ids)
								{

									$sql = "select * from posts where parent = 0 and userid in('" .$follower_ids. "') order by id desc limit 30";
									$posts = $DB->read($sql);

									
								}

								if(isset($posts) && $posts)
									{

										foreach ($posts as $ROW) {
											// code...

											$user = new User();
											$ROW_USER = $user->get_user($ROW['userid']);

											include("post.php");

										}
									}

						?>		
					</div>
				</div>

			</div>
			
		</div>
</body>
</html>