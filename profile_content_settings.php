<div style="min-height: 400px; padding-right: 0px; width: 100%; background-color: white; text-align: center;">
	<div style="padding: 20px; max-width: 350px; display: inline-block;">
		

		<form method="post" enctype="multipart/form-data">
						
			<?php

				$settings_class = new Settings();

				$settings = $settings_class->get_settings($_SESSION['mybook_userid']);

				if(is_array($settings))
				{

					echo "<input type='text' id='textbox' name='first_name' value = '".htmlspecialchars($settings['first_name']). "'placeholder='Fisrt name' />";

					echo "<input type='text' id='textbox' name='last_name' placeholder='Last name'value = '".htmlspecialchars($settings['last_name']). "' />";

					echo "<select id='textbox' name='gender' style='height: 30px;'>

						<option>".htmlspecialchars($settings['gender'])."</option>
						<option>Male</option>
						<option>Female</option>
					</select>";


					echo "<input type='text' id='textbox' name='email' placeholder='Email' value = '".htmlspecialchars($settings['email']). "' />";

					echo "<input type='password' id='textbox' name='password' placeholder='Password'value = '".htmlspecialchars($settings['password']). "'/>";

					echo "<input type='password' id='textbox' name='password2' placeholder='Password'value = '".htmlspecialchars($settings['password']). "'/>";

					echo"<br>About me:<br>
							<textarea id='textbox' style='height: 200px;' name='about'>".htmlspecialchars($settings['about'])."</textarea>";


					echo '<input type="submit" id="post_button" value="save">';
				}

				

			?>
		</form>
	</div>

</div>