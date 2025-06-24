<ul>
<?php
	include 'db_function.php';
	$doctor=$obj->getAll('SELECT * FROM `department`');
	foreach($doctor as $key=>$value)
	{
		extract($value);
		
		
		echo"<li><a href='#'><i class='fa fa-fw fa-plus-square-o'></i> <span>$dept_name</span></a>";
		$ok=$obj->getAll('SELECT * FROM `subject` WHERE `dept_id`='.$dept_id);
		foreach($ok as $key=>$sub)
		{
						extract($sub);
			?>

			<ul class='treeview-menu'>
				<li><a href='table_subject.php'><i class='fa fa-fw fa-table'></i>
					<span><?php echo $subject_name;?></span></a></li></ul>
	<?php		
		}
	?>
		</li>
<?php
	}

?>
</ul>