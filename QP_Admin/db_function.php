<?php
include_once('controllers/connection.php');
$obj=new Connection;
if(isset($_POST['login']))
{
	echo $username=$_POST["username"];
	echo $password=$_POST["password"];
	$table="log_admin";
	$type="admin";
	$data=$obj->check_login($username,$password,$table,$type);
	if($data==0)
	{
		header('location:home.php');
	}
	elseif($data==1)
	{
		@session_start();
		$status=$_SESSION['status'];
		if($status=='1')
		{
		header('location:error500.php');	
        }
		else{
		header('location:home.php');
		}
	}
	elseif($data==2)
	{
	@session_start();
		$status=$_SESSION['status'];
		if($status=='1')
		{
		header('location:error500.php');	
        }
		else{
		@session_start();
		$time=date('Y-m-d h:i:sa');
		//$time=date('d-m-Y h:i:sa');
		$id=$_SESSION['reg_id'];

		
		$obj->execute("INSERT INTO `log_time`(`loguser_id`, `time`) VALUES ('$id','$time')");
		
		header('location:home.php');
		}	
	}
	else{
		header('location:login.php?error="Invalid Authentication"');
	}
}


else if(isset($_POST['forgot']))
{
	$username=$_POST["email"];
	$table="log_admin";
	$type=$_POST["role"];
	$data=$obj->forgot_pass($username,$table,$type);
	if($data==0)
	{
		//header('location:../home.php');
	}
	/*elseif($data==1)
	{
		@session_start();
		$status=$_SESSION['status'];
		if($status=='1')
		{
		header('location:error500.php');	
        }
		else{
		header('location:home.php');
		}
	}
	elseif($data==2)
	{
	@session_start();
		$status=$_SESSION['status'];
		if($status=='1')
		{
		header('location:error500.php');	
        }
		else{
		@session_start();
		$time=date('Y-m-d h:i:sa');
		//$time=date('d-m-Y h:i:sa');
		$id=$_SESSION['reg_id'];

		
		$obj->execute("INSERT INTO `log_time`(`loguser_id`, `time`) VALUES ('$id','$time')");
		
		header('location:home.php');
		}	
	}*/
	else{
		header('location:login.php?error="Invalid Authentication"');
	}
}
else if(isset($_POST['t_reg']))
{
	
	
		$log=array(
			//'log_id'=>$_POST[''],
			'username'=>$_POST['email'],
			'password'=>$_POST['password'],
			'role'=>'teacher',
			'status'=>'1'
		);	
	$id=$obj->insert2('log_admin',$log);
	
	
		$regi=array(
			'reg_id'=>$id,
			'fname'=>$_POST['fname'],
			'cname'=>$_POST['cname'],
			'dept'=>$_POST['dept'],
			'phno'=>$_POST['phno'],
			'email'=>$_POST['email'],
			'password'=>$_POST['password'],
			're_password'=>$_POST['re_password'],'status'=>'1'
			
		);
		if($obj->insert('reg_teacher',$regi))
		{
			header('location:reg.php');
		}
		else{
			header('location:home.php');
		}
}
else if(isset($_POST['t_reg1']))
{
			$log=array(
			//'log_id'=>$_POST[''],
			'username'=>$_POST['email'],
			'password'=>$_POST['password'],
			'role'=>'teacher',
				'status'=>'1'
		);	
	$id=$obj->insert2('log_admin',$log);
	
	
		$regi=array(
			'reg_id'=>$id,
			'fname'=>$_POST['fname'],
			'cname'=>$_POST['cname'],
			'dept'=>$_POST['dept'],
			'phno'=>$_POST['phno'],
			'email'=>$_POST['email'],
			'password'=>$_POST['password'],
			're_password'=>$_POST['re_password'],'status'=>'1'
		);
		if($obj->insert('reg_teacher',$regi))
		{
			header('location:../logreg/signup.php');
		}
		else{
			header('location:../home.php');
		}
}else if(isset($_POST['add_ques']))
{
@session_start();
	$id=$_SESSION['id'];
	$dept=$_SESSION['dept'];
		$regi=array(
			'sub_id'=>$_POST['sub_id'],
			'question'=>$_POST['question'],
			'question_complex'=>$_POST['question_complex'],
			'question_type'=>$_POST['question_type'],
			'module'=>$_POST['module'],
			'teacher_id'=>$id,
			'dept'=>$dept
		);
		if($obj->insert('question',$regi))
		{
			header('location:add_question.php');
		}
		else{
			header('location:home.php');
		}
}
else if(isset($_GET['d_teacher']))
{
	$table='reg_teacher';
	$condition='reg_id='.$_GET['d_teacher'];
	$table1='log_admin';
	$condition1='log_id='.$_GET['d_teacher'];
	$result=$obj->deletion($table1,$condition1);
	$result=$obj->deletion($table,$condition);
	if($result=='ok')
	{
		
		header('location:remove-teacher.php?OK');	
	}else{
		header('location:home.php?cancel');
	}

}
else if(isset($_GET['d_examiner']))
{
	$table='reg_examiner';
	$table1='log_admin';
	$condition='examiner_id='.$_GET['d_examiner'];
	$condition1='log_id='.$_GET['d_examiner'];
	$result=$obj->deletion($table,$condition);
	$result=$obj->deletion($table1,$condition1);
	if($result=='ok')
	{
		header('location:remove_examiner.php?OK');	
	}else{
		header('location:home.php?cancel');
	}

	//?error//?success=OK
}
else if(isset($_POST['d_qp']))
{
	$table='pdf_files';
	
	$condition='u_id='.$_POST['d_qp'];
	
	$result=$obj->deletion($table,$condition);
	
	if($result=='ok')
	{
		header('location:upload_question_bank.php');	
	}else{
		header('location:home.php');
	}

	//?error//?success=OK
}
else if(isset($_POST['e_reg']))
{
		$log=array(
			//'log_id'=>$_POST[''],
			'username'=>$_POST['email'],
			'password'=>$_POST['password'],
			'role'=>'examiner','status'=>'0'
		);	
	$id=$obj->insert2('log_admin',$log);
	
		$regi=array(
			'examiner_id'=>$id,
			'name'=>$_POST['name'],
			'college_name'=>$_POST['college_name'],
			'phno'=>$_POST['phno'],
			'email'=>$_POST['email'],
			'password'=>$_POST['password'],
			'status'=>'0'
			//'re_password'=>$_POST['re_password']
		);
		if($obj->insert('reg_examiner',$regi))
		{
			//alert("Successfull");
			header('location:reg_examiner.php');
		}
		else
		{
			header('location:home.php');
		}
}
else if(isset($_POST['add_dep']))
{
		$dep=array(
			
			'dept_name'=>$_POST['dept_name']
		);
		if($obj->insert('department',$dep))
		{
			header('location:add_dept.php');
		}
		else{
			header('location:home.php');
		}
}
else if(isset($_POST['add_sub']))
{
		$regi=array(
			'dept_id'=>$_POST['dept_id'],
			'subject_name'=>$_POST['subject_name'],
			'course_code'=>$_POST['course_code'],
			'semester'=>$_POST['semester']
		);
		if($obj->insert('subject',$regi))
		{
			header('location:add_subject.php');
		}
		else{
			header('location:home.php');
		}
}
else if(isset($_REQUEST['d_sub']))
{
	$table='subject';
	$condition='sub_id='.$_REQUEST['d_sub'];
	$result=$obj->deletion($table,$condition);
	if($result=='ok')
	{
		
		header('location:remove_subject.php?success');	
	}else{
		header('location:home.php?pay');
	}

}
else if(isset($_POST['send']))
{
	$message=$_POST['message'];
	$member=$_POST['member'];
	$page='message1.php?success';
	if($member=='examiner')
	{
		$result=$obj->getAll('SELECT phno FROM reg_examiner');
		foreach($result as $number)
		{
			extract ($number);
			
			$obj->sms($phno,$message,$page);
			
		}
	}
	else if($member='teacher')
	{
		$result=$obj->getAll('SELECT phno FROM reg_teacher');
		foreach($result as $number)
		{
			extract ($number);
			
			$obj->sms($phno,$message,$page);
			
		}
	}
	else
	{
	
	$result=$obj->getAll("SELECT phno FROM 'reg_examiner,reg_examiner '");
		foreach($result as $number)
		{
			extract ($number);
			
			$obj->sms($phno,$message,$page);
			
		}	
		
	}
	
}
else if(isset($_REQUEST['u_block']))
{
	$field=array('status'=>'0');
	$field1=array('status'=>'0');
	$table='log_admin';
	$table1='reg_teacher';
	$condition="log_id='".$_REQUEST['u_block']."'";
	$condition1="reg_id='".$_REQUEST['u_block']."'";
	$others=array('page'=>'remove-teacher.php?success');
	$obj->update($field,$table,$condition,$others);		
	$obj->update($field1,$table1,$condition1,$others);		
}
else if(isset($_REQUEST['block']))
{
	$field=array('status'=>'1');
	$field2=array('status'=>'1');
	$table='log_admin';
	$table2='reg_teacher';
	$condition="log_id='".$_REQUEST['block']."'";
	$condition2="reg_id='".$_REQUEST['block']."'";
	$others=array('page'=>'remove-teacher.php?pay');
	$obj->update($field,$table,$condition,$others);		
	$obj->update($field2,$table2,$condition2,$others);		
}

else if(isset($_REQUEST['u_block2']))
{
	$field=array('status'=>'0');
	$field1=array('status'=>'0');
	$table='log_admin';
	$table1='reg_examiner';
	$condition="log_id='".$_REQUEST['u_block2']."'";
	$condition1="examiner_id='".$_REQUEST['u_block2']."'";
	$others=array('page'=>'remove_examiner.php?success');
	$obj->update($field,$table,$condition,$others);		
	$obj->update($field1,$table1,$condition1,$others);		
}
else if(isset($_REQUEST['block2']))
{
	$field=array('status'=>'1');
	$field2=array('status'=>'1');
	$table='log_admin';
	$table2='reg_examiner';
	$condition="log_id='".$_REQUEST['block2']."'";
	$condition2="examiner_id='".$_REQUEST['block2']."'";
	$others=array('page'=>'remove_examiner.php?pay');
	$obj->update($field,$table,$condition,$others);		
	$obj->update($field2,$table2,$condition2,$others);
	
}





else if(isset($_GET['u_status']))
{
	$field=array('status'=>'0');
	$field1=array('status'=>'0');
		$table='log_admin';
		$table1='reg_teacher';
	$condition="log_id='".$_GET['u_status']."'";
	$condition1="reg_id='".$_GET['u_status']."'";
	$others=array('page'=>'teacher_verification.php');
	$obj->update($field,$table,$condition,$others);		
	$obj->update($field1,$table1,$condition1,$others);
	$page='teacher_verification.php?success';
	$message="Registeration in EasyExam has Approved";
	$sql="SELECT `phno` FROM `reg_teacher` WHERE $condition1";
		$result=$obj->getAll($sql);
	foreach($result as $number)
		{
			extract ($number);
		$obj->sms($phno,$message,$page);
	}
	
}
else if(isset($_GET['d_history']))
{
	$table='log_time';
	$condition='loguser_id='.$_GET['d_history'];
	$result=$obj->deletion($table,$condition);
	if($result=='ok')
	{
		
		header('location:login_history.php?success');	
	}else{
		header('location:home.php?pay');
	}

}

else if(isset($_REQUEST['d_qppdf']))
{
	$table='pdf_files';
	$condition='u_id='.$_REQUEST['d_qppdf'];
	$result=$obj->deletion($table,$condition);
	if($result=='ok')
	{
		
		header('location:upload_qustion_bank.php?success');	
	}else{
		header('location:home.php?pay');
	}

}
else if(isset($_POST['q_upload']))
{
		$dep=array(
			'dept_id'=>$_POST['dept_id'],
			'dept_name'=>$_POST['dept_name']
		);
		if($obj->insert('department',$dep))
		{
			header('location:add_dept.php');
		}
		else{
			header('location:home.php');
		}
}
else if(isset($_POST["qb_upload"])){
		array_pop($_POST); //omits the button when button name comes last or else use "unset"
		extract($_POST);
		$data=$_POST;
		$pathname=image_upload($_FILES['image']['name']);
		$data['file']=$pathname;
		$result=$obj->insert_no_redirect("pdf_files",$data);
		if($result=='OK'){
			header('location:upload_qustion_bank.php');
			exit;
		}
		else{
			header('location:home.php');
			exit;
		}
	}
function image_upload($imgTp) //: Anonymous function
	 	 {				 
			$fileinfo = pathinfo($imgTp);				 
			 //getting the file extension 
			 $extension = $fileinfo['extension'];				 
			 if (($extension != "jpg") && ($extension != "pdf") && ($extension != "jpeg") && ($extension != "png") && ($extension != "gif"))
				{
					echo 'Unknown image format.';
				}
			//jpg-jpeg     
			if($extension=="jpg" || $extension=="jpeg" || $extension=="pdf" )
				{
					$uploadedfile = $_FILES['image']['tmp_name'];
				
					$temp = explode(".", $_FILES["image"]["name"]);
					$newfilename = round(microtime(true)) . '.' . end($temp);
							
					$filename1 = "uploads/". $newfilename;
					move_uploaded_file($uploadedfile, "$filename1");
					echo $filename1;
					return $filename1;
				}
	 	}	

if (! empty($_POST["dept_id"])) {
    $query = "SELECT * FROM department WHERE dept_id = '" . $_POST["dept_id"] . "' order by name asc";
    $results = $obj->getAll($query);
    ?>
<option value disabled selected>Select Department</option>
<?php
    foreach ($results as $dept) {
        ?>
<option value="<?php echo $dept["dept_id"]; ?>"><?php echo $dept["dept_name"]; ?></option>
<?php
    }
}

if (! empty($_POST["sub_id"])) {
    $query = "SELECT * FROM subject WHERE dept_id = '" . $_POST["sub_id"] . "'";
    $results = $obj->getAll($query);
    ?>
<option value disabled selected>Select Subject</option>
<?php
    foreach ($results as $sub) {
        ?>
<option value="<?php echo $sub["sub_id"]; ?>"><?php echo $sub["subject_name"]; ?></option>
<?php
    }
}


if(isset($_POST["co_id"])){
	$selectLoco = $_POST['co_id'];
	$query = "SELECT `course_code` FROM `subject` WHERE `sub_id` = '$selectLoco' ";
	$row=$obj->getOne($query);
	extract($row);
	//$result = mysql_query($query);
	//$row = mysql_fetch_assoc($result);
	//echo json_encode($row['course_code']);
	echo $course_code;
} 


