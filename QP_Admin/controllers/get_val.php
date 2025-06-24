<?php
	include(dirname(__FILE__)."/connection.php");
	$pdo=new Connection;
	$pdo->pre_print($_POST);
	$checker=str_replace(' ','_',strtolower((array_pop($_POST))));
	$data=($_POST);
	extract($data);
	if($_FILES)	
	{
		$data['image']=$pdo->file_upload($_FILES);
		//$pdo->pre_print($data);
	}
	$function_name="insert";	
	switch($checker)
	{
		case 'add_mobiles':
			$tablename='tbl_';
			$tablename.=$_GET['p'];
			$other=array(
				'message'=>'Fields Inserted',
				'page'=>'../pages/home.php?page='.$_GET['p'].'&form='.$checker	
			);
			$pdo->{$function_name}($tablename,$data,$other);
		break;
		case 'manage_brands':
			$tablename='tbl_';
			$tablename.=$_GET['p'];
			$other=array(
				'message'=>'Fields Inserted',
				'page'=>'../pages/home.php?page='.$_GET['p'].'&form='.$checker	
			);
			$pdo->{$function_name}($tablename,$data,$other);
		break;
		case 'notifications':
			$tablename='tbl_';
			$tablename.=$_GET['p'];
			$other=array(
				'message'=>'Fields Inserted',
				'page'=>'../pages/home.php?page='.$_GET['p'].'&form='.$checker	
			);
			$hd=$data['notification_heading'];
			$txt=$data['notification_content'];
			$headers  = 'MIME-Version: 1.0' . "\r\n";
			$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
			$headers .= 'From: '."Query From Aarding India< noreply@flankinnovations.in>"."\r\n";
				/* 'Reply-To: '.$user_email."\r\n" .
				'X-Mailer: PHP/' . phpversion(); */
			$headers .= "Reply-To: flankinnovations.in\r\n";
			$headers .= "Return-Path: flankinnovations.in\r\n";
			$headers .= "CC: noreply@flankinnovations.in\r\n";
			$headers .= "BCC: noreply@flankinnovations.in\r\n";
			$message = '<html><body>';
			$message .= '<h2 style="color:#F50057;">Sir,</br> You have a message from Smart Compare through our website</h2>';
			$message .= '<span style="color:#757575;font-size:14px;">'.$hd.'</span></br>';
			$message .= '<span style="color:#757575;font-size:12px;">'.$txt.'</span>';
			$message .= '<br/><br/><span style="color:#7B1FA2;font-size:16px;">Send By : </span>'.'<span style="color:#F50057;font-size:16px;">Nandu PV</span><br/><br/>';
			echo $message .= '</body></html>';
			$subject='Message From Smart Compare';
			$res=$pdo->getAll("SELECT * FROM `tbl_users` WHERE 1");
			include_once('mailer/sendmail.php');			
			foreach($res as $value){
				extract($value);
				sendMail($users_email,$message,$subject,$headers);
			}
			$pdo->{$function_name}($tablename,$data,$other);
		break;
		case 'offer_zone':
			$tablename='tbl_';
			$tablename.=$_GET['p'];
			$other=array(
				'message'=>'Fields Inserted',
				'page'=>'../pages/home.php?page='.$_GET['p'].'&form='.$checker	
			);
			$pdo->{$function_name}($tablename,$data,$other);
		break;		
		case 'user':
			$tablename='tbl_';
			$tablename.=$_GET['p'];
			$other=array(
				'message'=>'Fields Inserted',
				'page'=>'../pages/home.php?page=add&form='.$checker	
			);
			$pdo->{$function_name}($tablename,$data,$other);
		break;			
		case 'users':
		
			$tablename2='tbl_smartlogin';
			
			$data2=array(
				'login_username'=>$users_name,
				'login_password'=>substr(str_shuffle($users_name.$users_name),0,5),
				'login_type'=>'user'
			);
			$last_id=$pdo->insert2($tablename2,$data2);			
			if($last_id)
			{
				$tablename='tbl_';
				$tablename.=$_GET['p'];
				$other=array(
					'message'=>'Fields Inserted',
					'page'=>'../pages/home.php?page=add&form='.$checker	
				);
				$data['users_id']=$last_id;
				$msg="Your Smart Compare Login Password is  ".$data2['login_password'];
				$pdo->send_sms($msg,$users_phone);				
				$pdo->insert($tablename,$data,$other);
			}
		break;
		case 'login':
			$data=$pdo->check_login($username,$password);
			if($data==1)
			{
				$other=array(
					'message'=>'Fields Inserted',
					'page'=>'../pages/Home'	
				);
				$pdo->page_redirect($other);
			}
			else
			{
				$other=array(
					'message'=>'Login Failed',
					'page'=>'../pages/login'	
				);
				$pdo->page_redirect($other);				
			}
		break;		
		default:
			$eid=$_GET['eid'];
			$form=$_GET['form'];
			$did=$_GET['con'];
			$condition=$did.'='.$eid;
			//$page=str_replace('_','',$form);
			$other=array(
				'message'=>'Fields Inserted',
				'page'=>'../pages/home.php?page='.$form.'&form='.$form		
			);		
			$pdo->deletion('tbl_'.$form,$condition,$other);
		break;
	}
	//$ins=new Insertion($tablename,$data,$other);
	$pdo->Close();
?>