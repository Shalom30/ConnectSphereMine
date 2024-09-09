<?php

class User
{
	//retriving user data using id
	public function get_data($id)
	{
		$query = "select * from users where userid = '$id' limit 1";
		$DB = new Database();
		$result = $DB->read($query);

		if($result)
		{
			$row = $result[0];
			return $row;
		}
		else
		{
			return false;
		}
	}

	public function get_user($id)
	{

		$query = "select * from users where userid = '$id' limit 1";

		$DB = new Database();
		$result = $DB->read($query);

		if($result)
		{
			return $result[0];
		}
		else
		{
			return false;
		}
	}

	public function get_friends($id)
	{
		//we do not also set the limit since there is more than one friend

		$query = "select * from users where userid != '$id'";

		$DB = new Database();
		$result = $DB->read($query);

		if($result)
		{
			//there are many friends that is why we don't user the index when returning the result
			return $result;
		}
		else
		{
			return false;
		}
	}

		public function get_following($id, $type)
	{
		$DB = new Database();
		$type = addslashes($type);
		if(is_numeric($id))
		{
//this is where it starts 
			

			$sql = "select following from likes where type = '$type' && contentid = '$id' limit 1";
			$result = $DB->read($sql);
//this is where it ends
			if(is_array($result))
			{
				$following = json_decode($result[0]['following'],true);

				return $following;
			}
		}

		return false;
	}

	public function follow_user($id,$type, $mybook_userid)
	{

			$DB = new Database();

			//save like details
			$sql = "select following from likes where type = '$type' && contentid = '$mybook_userid' limit 1";
			$result = $DB->read($sql);
			if(is_array($result))
			{
				$following = json_decode($result[0]['following'],true);
				
				if(!$following)
				{
					$arr["userid"] = $id;
					$arr["date"] = date("Y-m-d H:i:s");

					$following[] = $arr;
					
					$following_string = json_encode($following);
					$sql = "update likes set following = '$following_string' where type = '$type' && contentid = '$mybook_userid' limit 1";
					$DB->save($sql);

				}
				else
				{
					//creating an array column
					$user_ids = array_column($following, "userid");

					if(!in_array($id, $user_ids))
					{

						$arr["userid"] = $id;
						$arr["date"] = date("Y-m-d H:i:s");

						$following[] = $arr;
						
						$following_string = json_encode($following);
						$sql = "update likes set following = '$following_string' where type = '$type' && contentid = '$mybook_userid' limit 1";
						$DB->save($sql);

					}
					else
					{
						//here we are making sure that if the user has already followed  he should not follow again
						$key = array_search($id, $user_ids);
						unset($following[$key]);

						//redoing encoding.
						$following_string = json_encode($following);
						$sql = "update likes set following = '$following_string' where type = '$type' && contentid = '$mybook_userid' limit 1";
						$DB->save($sql);

					}

				}
				
			}
			else
			{
				$arr["userid"] = $id;
				$arr["date"] = date("Y-m-d H:i:s");

				$arr2[] = $arr;

				//we use jason_encode() here to convert our array to a string since our database can only store strings
				$following = json_encode($arr2);
				$sql = "insert into likes (type,contentid,following) values ('$type','$mybook_userid','$following')";
				$DB->save($sql);

			}
	}


}