<?php
	$corner_image = "images/user_male.jpg";
	if(isset($USER))
	{
		if(file_exists($USER['profile_image']))
		{
			$image_class = new Image();
			$corner_image = $image_class->get_thumb_profile($USER['profile_image']);
		}
		else
		{
			if($USER['gender'] == "Female")
			{
				$corner_image = "images/user_fale.jpg";
			}
		}
	}
?>
<div id="blue-bar">
	<form method="get" action="search.php">
		<div style="width: 800px; margin: auto; font-size: 30px;">

			<a href="index.php" style="color: white; text-decoration: none;">My-Commuity</a>
			
			 	&nbsp &nbsp<input type="text" id="search_box" name="find" placeholder="search for people">
			 
			 <a href="profile.php">
				<img src="<?php echo $corner_image ?>" style="width: 50.2px; float: right; height: 50px; object-fit: cover;">
			</a>
			<a href="logout.php">
				<span style="font-size: 11px; float: right; margin: 10px; color: white;">Logout</span>
			</a>

		</div>
	</form>
</div>