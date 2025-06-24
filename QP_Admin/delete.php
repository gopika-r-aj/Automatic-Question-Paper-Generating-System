<!--Delete-->
 <a href='db_function.php?d_teacher=$reg_id'>
							  	<button type='button' class='btn btn-danger'>Delete</button>
							  </a>
<!--dbfunction-->
else if(isset($_GET['d_teacher']))
{
	$table='reg_teacher';
	$condition='reg_id='.$_GET['d_teacher'];
	$result=$obj->deletion($table,$condition);
	if($result=='OK')
	{
		header('location:remove-teacher.php');	
	}else{
		header('location:home.php');
	}

}

<!--Connection-->
	
	function deletion($table,$condition)
	{
		 $sql="DELETE FROM $table WHERE $condition";
		$result=self::execute($sql);		
		//Insertion::page_redirect2($other);
		return 'OK';			
	}