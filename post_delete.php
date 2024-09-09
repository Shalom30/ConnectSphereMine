
<div id="post">
	<div>
		<?php

			$image = "images/user_male.jpg";
			if($ROW_USER['gender'] == "Female")
			{
				$image = "images/user_female.jpg";
			}

			$image_class = new Image();

			if(file_exists($ROW_USER['profile_image']))
			{
				$image = $image_class->get_thumb_profile($user_data['profile_image']);
			}



		?>
		<img src="<?php echo $image ?>" style="width: 70px; height: 70px; margin-right: 4px; object-fit:cover; border-radius: 50%;">
	</div>
	<div style="width: 100%;">
		<div style="font-weight: bold; color: #405d9b; width: 100%;">
			<?php 
			 // we are adding html entities for security purposes 
			echo htmlspecialchars($ROW_USER['first_name']) . " " . htmlspecialchars($ROW_USER['last_name']); 

			if($ROW['is_profile_image'])
			{
				$pronoun = "his";
				if($ROW_USER['gender'] == "Female")
				{
					$pronoun = "her";
				}
				echo "<span style = 'font-weight: normal; color: #aaa;'> updated $pronoun profile image</span>";
			}

			if($ROW['is_cover_image'])
			{
				$pronoun = "his";
				if($ROW_USER['gender'] == "Female")
				{
					$pronoun = "her";
				}
				echo "<span style = 'font-weight: normal; color: #aaa;'> updated $pronoun cover image</span>";
			}



			?>
			
		</div>
		<!-- post is used here because it's the row that contains the data that we need -->
		<!-- we are adding html entities for security purposes -->
		<?php echo htmlspecialchars($ROW['post']) ?>

		<br><br>
		<?php 
			if(file_exists($ROW['image']))
			{
				$post_image = $image_class->get_thumb_post($ROW['image']);
				
				echo "<img src='$post_image' style='width: 80%;'/>";
			}
		
		 ?>

		<br><br>
		
	</div>						
</div>	