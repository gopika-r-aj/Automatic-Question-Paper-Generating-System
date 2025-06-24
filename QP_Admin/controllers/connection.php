<?php
class Connection
{
	private $conn;
	private $host;
	private $username;
	private $password;
	public $database;
	private $port;
	private $debug;
	private $attributes;
    function Connection($params=array()) 
	{
		//error_reporting(0);
		$this->conn = false;
		$this->host ='localhost';
		$this->database ='autoques';		
		$this->username ='root'; 
		$this->password =''; 
		$this->port = '';
		$this->debug = true;
		$attributes=array(
			PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8'
		);
		$this->connect();
		@session_start();
	}
	function __destruct() 
	{
		//$this->Close();
	}
	function connect() //connection
	{
		if (!$this->conn) {
			try {
				$this->conn = new PDO('mysql:host='.$this->host.';dbname='.$this->database.'', $this->username, $this->password, $this->attributes);  			
			}
			catch (Exception $e) {
				die('Error : ' . $e->getMessage());
				echo"Connect Error";
			}
 
			if (!$this->conn) {
				$this->status_fatal = true;
				echo 'Connection failed';
				die();
			} 
			else {
				$this->status_fatal = false;
			}
		}
		return $this->conn;
	}
	function Close() 
	{
		if ($this->conn) {
			$this->conn = null;
		}
	}




	function insert($tablename,$data)
	{
		//$this->conn=parent::connect();		
		$fields = array_keys($data); 		            
		echo $sql = "INSERT INTO ".$tablename."
		(`".implode('`,`', $fields)."`)
		VALUES('".implode("','", $data)."');"; 		                            
		$prepared=$this->conn->prepare($sql);
		$insert_status=$prepared->execute($data);
		//print_r($prepared->errorInfo());
		//print_r($prepared->errorCode());
		if($insert_status==1)
		{
			//Insertion::page_redirect($other);
			return 1;
		}
		else
		{
			echo "Insert Error".$sql;
			//print_r($prepared->errorInfo());
		}
		return $insert_status;		
	}
	function alert($message,$type)
	{
		echo "
			<script>
swal({
title: 'Are you sure?'',
text: 'Once deleted, you will not be able to recover this imaginary file!'',
icon: 'warning',
buttons: true,
dangerMode: true,
})
.then((willDelete) => {
if (willDelete) {
swal('Poof! Your imaginary file has been deleted!', {
icon: 'success',
});
} else {
swal('Your imaginary file is safe!');
}
});
</script>";

	}
function sweetalert($type,$message,$location)
 {
 echo"<script type='text/javascript'>
      Swal.fire({
        position: 'center',
        type: '$type',
        title: '$message',
        showConfirmButton: false,
        timer: 2000
      })
      .then(function() {
    window.location = '$location';
});
     </script>";
   }	
	function insert2($tablename,$data)	{
		//$this->conn=parent::connect();		
		$fields = array_keys($data); 		            
		$sql = "INSERT INTO ".$tablename."
		(`".implode('`,`', $fields)."`)
		VALUES('".implode("','", $data)."');"; 		                            
		$prepared=$this->conn->prepare($sql);
		$insert_status=$prepared->execute($data);
		//print_r($prepared->errorInfo());
		//print_r($prepared->errorCode());

		if($insert_status==1)
		{
			//Insertion::page_redirect2($other);
			$lid=$this->conn->lastInsertId();
		}
		else
		{
			echo "Insert Error".$sql;
			//print_r($prepared->errorInfo());
		}
		return $lid;		
	}	
	function insert_no_redirect($tablename,$data)
	{
		//$this->conn=parent::connect();		
		$fields = array_keys($data); 		            
		 $sql = "INSERT INTO ".$tablename."
		(`".implode('`,`', $fields)."`)
		VALUES('".implode("','", $data)."');"; 		                            
		$prepared=$this->conn->prepare($sql);
		$insert_status=$prepared->execute($data);
		//print_r($prepared->errorInfo());
		//print_r($prepared->errorCode());
		if($insert_status==1)
		{
			return "OK";
		}
		else
		{
			echo "Insert Error".$sql;
		    print_r($prepared->errorInfo());
		}
		return $insert_status;		
	}
	
	function deletion($table,$condition)
	{
		 $sql="DELETE FROM $table WHERE $condition";
		$result=self::execute($sql);		
		//Insertion::page_redirect2($other);
		return 'ok';			
	}
//================================================================================================================
	function getNameByID($table_name,$field_name,$condition)
	{
		$sql="SELECT `$field_name` FROM `$table_name` WHERE $condition";
		$result=$this->getOne($sql);
		//print_r($result);
		echo($result[$field_name]);
	}
	
//================================================================================================================	
	function getOne($query) //used to get one from a column for editing purpose
	{
		$result = $this->conn->prepare($query);
		$ret = $result->execute();
		if (!$ret) {
		   /*echo 'PDO::errorInfo():';
		   echo '<br />';
		   echo 'error SQL: '.$query;
		   die();*/
		   return $ret;
		}
		$result->setFetchMode(PDO::FETCH_ASSOC);
		$reponse = $result->fetch();
		
		return $reponse;
	}
//================================================================================================================	
	function getAll($query) //Used to select all the data from one table
	{
		//echo $query;
		$result = $this->conn->prepare($query);
		$ret = $result->execute();
		if (!$ret)
			{
				/*echo 'PDO::errorInfo():';
		   echo '<br />';
		   echo 'error SQL: '.$query;
		   die();*/
		   return $ret;
		}
		$result->setFetchMode(PDO::FETCH_ASSOC);
		$reponse = $result->fetchAll();
		return $reponse;
	}
	function getAlls($query) //Used to select all the data from one table
	{
		//echo $query;
		$result = $this->conn->prepare($query);
		$ret = $result->execute();
		if (!$ret)
			{
				/*echo 'PDO::errorInfo():';
		   echo '<br />';
		   echo 'error SQL: '.$query;
		   die();*/
		   return $ret;
		}
		$result->setFetchMode(PDO::FETCH_NUM);
		$reponse = $result->fetchAll();
		return $reponse;
	}	
	
//================================================================================================================
	function execute($query) //this is function is used to execute query such as insert update etc.
	{
		if (!$response = $this->conn->exec($query)) {
			/*echo 'PDO::errorInfo():';
		   echo '<br />';
		   echo 'error SQL: '.$query;
		   die();*/
		    //return $ret;
		}
		return $response;
	}
//================================================================================================================
	function data($a)//My function for imploding array in a query manner
	{
	$fields=$a;
	$data="";
	$separator = '';
	foreach($fields as $key=>$value) 
	{
		$data .= $separator . $key . '=\'' . $value; 
		$separator = '\','; 
	}
	
	return $data;
	}

	function update($field,$table,$condition,$other)//update function
	{
		//array_pop($field);
		//print_r($field);
		$field=self::data($field);//calling function inside the function
		$field.="' WHERE";
		//$condition=self::data($condition);
		$condition=$condition;
		//$condition.="'";
		$sql="UPDATE $table set $field $condition";
		$result=self::execute($sql);//calling execute function 
		if($result==1)
		{
			Insertion::page_redirect2($other);
		}
		else
		{
			echo "Insert Error".$sql;
			//print_r($prepared->errorInfo());
		}
		return  $result;
	}


	
	
//================================================================================================================
	/*function __call($function_name,$arguments)
	{
			if($function_name == 'fetching') {			
				//$arg_num = func_num_args();
				$table=$arguments[0]['table'];
				$condition=$arguments[0]['condition'];							
				switch(count($arguments))
				{
					case 1:		
						$sql="SELECT * FROM $table WHERE $condition";
						$result=self::getAll($sql); 
					break;
					case 2:
						 $sql="SELECT * FROM $table WHERE $condition";
						 $result=self::getOne($sql);
						 print_r($result);
					break;
					case 3:
						$fields=$arguments[0]['fields'];
						//$sql="SELECT $this->fields FROM $this->table WHERE $this->condition";
						$result=self::getOne($sql); 
					break;								
				}
			}
		return $result;			
	}*/
	
	function file_upload($get_file)
	{
			//$currentDir = getcwd();
			//$this->pre_print($get_file);
			//extract($get_file);
			$uploadDirectory = "../uploads/";
			$errors = []; // Store all foreseen and unforseen errors here
			$fileExtensions = ['jpeg','jpg','png','pdf']; // Get all the file extensions
			$fileName = $_FILES['image']['name'];
			$fileSize = $_FILES['image']['size'];
			$fileTmpName  = $_FILES['image']['tmp_name'];
			$fileType = $_FILES['image']['type'];
			$fileExtension=explode('.',$fileName);
			$fileExtension =strtolower($fileExtension[1]);
			//$uploadPath = $currentDir . $uploadDirectory . basename($fileName); 
			$uploadPath = $uploadDirectory . basename($fileName); 

			//if (isset($_POST['submit'])) {

				if (! in_array($fileExtension,$fileExtensions)) {
					$errors[] = "This file extension is not allowed. Please upload a JPEG or PNG file";
				}

				if ($fileSize > 2000000) {
					$errors[] = "This file is more than 2MB. Sorry, it has to be less than or equal to 2MB";
				}

				if (empty($errors)) {
					$didUpload = move_uploaded_file($fileTmpName, $uploadPath);

					if ($didUpload) {
						//echo "The file " . basename($fileName) . " has been uploaded";
					} else {
						echo "An error occurred somewhere. Try again or contact the admin";
					}
				} else {
					foreach ($errors as $error) {
						echo $error . "These are the errors" . "\n";
					}
				}
			//}
		return $uploadPath;
	}

	function page_redirect($other)
	{
		extract($other);
		header("location:$page.php?$message");
	}
	function page_redirect2($other)
	{
		extract($other);
		header("location:$page?$message");
	}	

	function display_name($nametoformat)
	{
		return ucwords(str_replace('_',' ',str_replace('tbl_','',$nametoformat)));
	}
	function display_control_name($nametoformat)
	{	
		return str_replace('tbl_','',$nametoformat);
	}
	function pre_print($data)
	{	
		echo "<pre>";
			print_r($data);
		echo "</pre>";
	}	
	function ED($fname,$editvalue)
	{
		$values=$editvalue[$fname];
		?>
		<script>
			//document.getElementById('<?php echo $fname;?>').value='<?php echo $values;?>';
			var app = angular.module('myApp', []);
			app.controller('formCtrl', function($scope) {
				$scope.<?php echo $fname; ?> = "<?php echo $values;?>";
			});
		</script>
		<?php
	}
   function check_login($username,$password,$table,$type)
   {
	    $a=$this->conn->quote($username);
		$b=$this->conn->quote($password);
		$c=$table;
	   if($a!="" && $b!="")
		{
		   
	   		//if($type=='admin')
			//{
					echo $query="SELECT * FROM `$c` WHERE `username` = $a AND `password` = $b";
			//SELECT * FROM `log-admin` WHERE `user-name` = 'subin' AND `password` = '123456'
					$result = $this->conn->prepare($query);
					$result->execute();
					$res = $result->rowCount();				
					if($res==1)
					{
						$reponse = $result->fetch(PDO::FETCH_ASSOC);
						@session_start();
						extract($reponse);
						$_SESSION['reg_id']=$log_id;//may be the employee id to fetch all his/her details
						$_SESSION['role']=$role;//may be the employee id to fetch all his/her details
						$_SESSION['status']=$status;//may be the employee id to fetch all his/her details
						if($role=='teacher')
						{
							$sql="SELECT * from reg_teacher where reg_id=$log_id";
							$result = $this->conn->prepare($sql);
							$result->execute();
							$reponse = $result->fetch(PDO::FETCH_ASSOC);
							extract($reponse);
							
								echo $_SESSION['log_name']=$fname;					
								$_SESSION['admin']=$username;
								$_SESSION['dept']=$dept;
								$_SESSION['id']=$reg_id;
							

							$data=1;
							return $data;
						}
						elseif($role=='examiner')
						{
							//!(isset($_SESSION['examiner']))
							$sql="SELECT * from reg_examiner where examiner_id=".$log_id;
							$result = $this->conn->prepare($sql);
							$result->execute();
							$reponse = $result->fetch(PDO::FETCH_ASSOC);
							extract($reponse);

								
								$_SESSION['log_name']=$name;
								$_SESSION['admin']=$username;					

							$data=2;
							return $data;
						}
						elseif($role=='admin')
						{
							$_SESSION['log_name']=$username;
							$_SESSION['admin']=$log_id;					

							$data=0;
							return $data;
						}

					}
					else
					{
						$data=0;
						return $data;
						//return $query;
					}
			}
			  
   }
	
	  function forgot_pass($username,$table,$role)
   {
	   	$a=$this->conn->quote($username);
		$c=$table;
		$d=$this->conn->quote($role);
	   if($a!="")
		{
		   
	   		//if($type=='admin')
			//{
					 $query="SELECT * FROM `$c` WHERE `username` = $a and role = $d and status='0' ";
			//SELECT * FROM `log-admin` WHERE `user-name` = 'subin' AND `password` = '123456'
					$result = $this->conn->prepare($query);
					$result->execute();
					$res = $result->rowCount();				
					if($res==1)
					{
						$reponse = $result->fetch(PDO::FETCH_ASSOC);
						@session_start();
						extract($reponse);
						$_SESSION['reg_id']=$log_id;//may be the employee id to fetch all his/her details
						$_SESSION['role']=$role;//may be the employee id to fetch all his/her details
						$_SESSION['status']=$status;//may be the employee id to fetch all his/her details
						$_SESSION['password']=$password;//may be the employee id to fetch all his/her details
						$_SESSION['username']=$username;//may be the employee id to fetch all his/her details
						if($role=='teacher')
						{
							$sql="SELECT * from reg_teacher where reg_id=$log_id";
							$result = $this->conn->prepare($sql);
							$result->execute();
							$reponse = $result->fetch(PDO::FETCH_ASSOC);
							extract($reponse);
							
							$_SESSION['log_name']=$fname;					
							$_SESSION['username']=$username;
							$_SESSION['dept']=$dept;
							$_SESSION['phno']=$phno;
							$_SESSION['id']=$reg_id;
							$message="Your Registered Username= $username and Password=$password";
							$page='../logreg/signin.html';
						    $this->sms($phno,$message,$page);
						}
						elseif($role=='examiner')
						{
							//!(isset($_SESSION['examiner']))
							$sql="SELECT * from reg_examiner where examiner_id=".$log_id;
							$result = $this->conn->prepare($sql);
							$result->execute();
							$reponse = $result->fetch(PDO::FETCH_ASSOC);
							extract($reponse);

								
								$_SESSION['log_name']=$name;
								$_SESSION['username']=$username;
							$_SESSION['phno']=$phno;
							$message="Your Registered Username= $username and Password=$password";
							$page='../logreg/signin.html';
						    $this->sms($phno,$message,$page);

							
						}
						/*elseif($role=='admin')
						{
							$_SESSION['log_name']=$username;
							$_SESSION['admin']=$log_id;					

							$data=0;
							return $data;
						}*/

					}
					else
					{
						$data=0;
						return $data;
						//return $query;
					}
			}
			  
   }
	
	
	
   
function logout($session,$loc)
{
	@session_start();
	unset($_SESSION[$session]);
	session_destroy();
	header("Location:".$loc);
	exit;	   
}
   
function send_sms($msg,$number)
	{
			//Please Enter Your Details
			$user="vimal"; //your username 
			$password="123456"; //your password
			$mobilenumbers=$number; //enter Mobile numbers comma seperated
			$message = $msg; //enter Your Message
			$senderid="WEBSMS"; //Your senderid
			$url="http://sms.flankinnovations.in/SMS_API/sendsms.php"; 
			$message = urlencode($message);
			$ch = curl_init();
			if (!$ch){die("Couldn't initialize a cURLhandle");} 
			$ret = curl_setopt($ch,CURLOPT_URL,$url); curl_setopt ($ch,CURLOPT_POST, 1);
			curl_setopt($ch,CURLOPT_SSL_VERIFYPEER, false);
			curl_setopt($ch,CURLOPT_SSL_VERIFYHOST, 2);
		    curl_setopt ($ch,CURLOPT_POSTFIELDS,"username=$user&password=$password&mobile=$mobilenumbers&message=$message&sendername=$senderid&routetype=0");
			$ret = curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
			//If you are behind proxy then please uncomment below line and provide your proxy ip with port. 
			//$ret = curl_setopt($ch, CURLOPT_PROXY, "PROXY IP ADDRESS:8080");
			$curlresponse = curl_exec($ch); //execute 
			if(curl_errno($ch))echo 'curl error : '. curl_error($ch);
			if (empty($ret)) {
			// some kind of an error happened
			die(curl_error($ch));
			curl_close($ch); // close cURLhandler 
			} else {
				$info = curl_getinfo($ch);
			curl_close($ch); // close cURLhandler
			echo $curlresponse; //
			//echo "Message Sent Succesfully" ;
				if($curlresponse){
					//header('location:'.$page);
				}
			}			
			
	}   
	function sms($number,$msg,$page)
	{
		$smsuser='vimal';
		$smspwd='123456';
		$number=$number;
		$message=$msg;
		 $url = 'http://sms.flankinnovations.in/SMS_API/sendsms.php?username='.$smsuser.'&password='.$smspwd.'&mobile='.$number.'&message='.urlencode($message).'&sendername=GREENG&routetype=0';
		$ch = curl_init();
		$timeout = 5;
		curl_setopt($ch, CURLOPT_URL, $url);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
		curl_setopt($ch, CURLOPT_SSL_VERIFYHOST,false);
		curl_setopt($ch, CURLOPT_SSL_VERIFYPEER,false);
		curl_setopt($ch, CURLOPT_MAXREDIRS, 10);
		curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
		curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, $timeout);
		$data = curl_exec($ch);
		curl_close($ch);
		
		if($data){
					header('location:'.$page);
				}
		
	}
   
   
	
}//End Class Connection

class Insertion extends Connection
{
	private $conn;
	//function Insertion($tablename,$data,$other)
	//{
		//For Future Updation
	//}
	function page_redirect($other)
	{
		extract($other);
		header("location:$page.php?$message");
	}	
}
?>
