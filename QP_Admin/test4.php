 function check_login($username,$password,$table,$type)
   {
	    $a=$this->conn->quote($username);
		$b=$this->conn->quote($password);
		$c=$this->conn->quote($table);
	   if($a!="" && $b!="")
		{
			$query="SELECT * FROM `$c` WHERE `username` = $a AND `password` = $b";
			//SELECT * FROM `log-admin` WHERE `user-name` = 'subin' AND `password` = '123456'
			$result = $this->conn->prepare($query);
			$result->execute();
			$res = $result->rowCount();				
			if($res==1)
			{
				$reponse = $result->fetch(PDO::FETCH_ASSOC);
				@session_start();
				extract($reponse);
				$_SESSION['id']=$login_id;//may be the employee id to fetch all his/her details
				$sql="SELECT * from tbl_users where user_id=$login_id";
				$result = $this->conn->prepare($sql);
				$result->execute();
				$reponse = $result->fetchAll(PDO::FETCH_ASSOC);
				extract($reponse);
				if($login_type=='admin')
				{
					$_SESSION['admin']=$login_id;
					$_SESSION['admin']=$login_username;					
				}
				$data=1;
				return $data;
				//return $sql;*/
			}
			else
			{
				$data=0;
				return $data;
				//return $query;
			}
		}
   }
   