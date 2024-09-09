<div style="display: flex;">

				<!--friends area-->
				<div style="flex: 1; min-height: 400px;">

					<div  id="friends_bar">
						
						USERS

						<?php
							echo "<div>";
							if($friends)
							{
								foreach ($friends as $FRIEND_ROW) {
									// code...

									include("user.php");
								}
							}
							echo "</div>";
						

						?>	
						
			
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
							if($posts)
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