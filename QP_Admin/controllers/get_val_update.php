<?php
	include(dirname(__FILE__)."/connection.php");
	$pdo=new Connection;
	$pdo->pre_print($_POST);
	$checker=str_replace(' ','_',strtolower((array_pop($_POST))));
	$data=($_POST);
	extract($data);
	if($_FILES)
	{
		if($_FILES['image']['size']==0)	
		{
			array_pop($data);
			//$pdo->pre_print($data);
			//if (($key = array_search('image', $data)) !== false) {
				//unset($data[$key]);
			//}			
		}
		else
		{
			$data['image']=$pdo->file_upload($_FILES);
			//$pdo->pre_print($_FILES);	
		}
	}
	$function_name="update";
	$eid=$_GET['eid'];
	switch($checker)
	{
		case 'add_mobiles':
			$tablename='tbl_';
			$tablename.=$_GET['p'];			
			$other=array(
				'message'=>'Fields Inserted',
				'page'=>'../pages/home.php?page='.$_GET['p'].'&form='.$checker	
			);			
			$condition='mobile_id='.$eid;
			$pdo->{$function_name}($data,$tablename,$condition,$other);	
		break;
		case 'manage_brands':
			$tablename='tbl_';
			$tablename.=$_GET['p'];
			$other=array(
				'message'=>'Fields Inserted',
				'page'=>'../pages/home.php?page='.$_GET['p'].'&form='.$checker	
			);
			$condition='brand_id='.$eid;
			$pdo->{$function_name}($data,$tablename,$condition,$other);
		break;
		case 'notifications':
			$tablename='tbl_';
			$tablename.=$_GET['p'];
			$other=array(
				'message'=>'Fields Inserted',
				'page'=>'../pages/home.php?page='.$_GET['p'].'&form='.$checker	
			);
			$condition='notification_id='.$eid;
			$pdo->{$function_name}($data,$tablename,$condition,$other);
		break;
		case 'offer_zone':
			$tablename='tbl_';
			$tablename.=$_GET['p'];
			$other=array(
				'message'=>'Fields Inserted',
				'page'=>'../pages/home.php?page='.$_GET['p'].'&form='.$checker	
			);
			$condition='offer_id='.$eid;
			$pdo->{$function_name}($data,$tablename,$condition,$other);
		break;		
		case 'user':
			$tablename='tbl_';
			$tablename.=$_GET['p'];
			$other=array(
				'message'=>'Fields Inserted',
				'page'=>'../pages/home.php?page=add&form='.$checker	
			);
			$pdo->{$function_name}($data,$tablename,$condition);
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