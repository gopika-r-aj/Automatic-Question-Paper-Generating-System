<?php
@session_start();
	$role=$_SESSION['role'];


?><!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="dist/img/user1-128x128.jpg" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p>
			  <?php
			  		echo $_SESSION['log_name'];
			  ?>
			</p>
          <a href="#"><i class="fa fa-circle text-success"></i> <?php
			  		echo $_SESSION['role'];
			  ?></a>
        </div>
      </div>
      <!-- search form -->
      <form action="#" method="get" class="sidebar-form">
        <div class="input-group">
          <input type="text" name="q" class="form-control" placeholder="Search...">
          <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                </button>
              </span>
        </div>
      </form>
      <!-- /.search form -->
      <!-- sidebar menu: : style can be found in sidebar.less -->
	
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">MAIN NAVIGATION</li>
		<?php
if(($role=='admin'))
{
	?>	  
		   <li class=" treeview">
          <a href="#">
            <i class="fa fa-fw fa-gear"></i> <span>Examiner Settings</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>	  
          <ul class="treeview-menu">
            <li><a href="reg_examiner.php"><i class="fa fa-fw fa-plus-square-o"></i> <span>Add Examiner</span></a></li>
		<li><a href="remove_examiner.php"><i class="fa fa-fw fa-ban"></i><span>Remove Examiner</span></a></li>
		<li>
          <a href="login_history.php">
            <i class="fa fa-fw fa-check-square-o"></i> <span>Login History</span>
            <span class="pull-right-container">
              <!--<small class="label pull-right bg-yellow">12</small>-->
              <!--<small class="label pull-right bg-green">16</small>-->
              <!--<small class="label pull-right bg-red">5</small>-->
            </span>
          </a>
        </li>
		
          </ul>
        </li>
		
        <li class=" treeview">
          <a href="#">
            <i class="fa fa-fw fa-gear"></i> <span>Teachers Settings</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>	  
          <ul class="treeview-menu">
            <li><a href="reg.php"><i class="fa fa-fw fa-plus-square-o"></i> <span>Add Teacher</span></a></li>
		<li><a href="remove-teacher.php"><i class="fa fa-fw fa-ban"></i><span>Remove Teacher</span></a></li>
		<li>
          <a href="teacher_verification.php">
            <i class="fa fa-fw fa-check-square-o"></i> <span>Teachers Verification</span>
            <span class="pull-right-container">
				<?php
	$pending=$obj->getOne("SELECT count(log_id) as pending FROM log_admin  where status=1 and role='teacher'");
	
	?>
              <!--<small class="label pull-right bg-yellow">12</small>-->
              <small class="label pull-right bg-green"><?=$pending['pending'];?></small>
              <!--<small class="label pull-right bg-red">5</small>-->
            </span>
          </a>
        </li>
		
          </ul>
        </li>
		  
		<li class=" treeview">
          <a href="#">
            <i class="fa fa-fw fa-university"></i> <span>Department Settings</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>	  
          <ul class="treeview-menu">
            <li><a href="add_dept.php"><i class="fa fa-fw fa-plus-square-o"></i> <span>Add Department</span></a></li>
		<li><a href="add_subject.php"><i class="fa fa-fw fa-plus-square-o"></i><span>Add Subject</span></a></li>
		<li>
          <a href="remove_subject.php">
            <i class="fa fa-fw fa-ban"></i> <span>Remove Subject</span>
            <span class="pull-right-container">
              <!--<small class="label pull-right bg-yellow">12</small>-->
             <!-- <small class="label pull-right bg-green">16</small>-->
              <!--<small class="label pull-right bg-red">5</small>-->
            </span>
          </a>
        </li>	
          </ul>
        </li>
		  		 <li>
          <a href="question-paper-gen.php">
            <i class="fa fa-fw fa-edit"></i> <span>Generate Question Paper</span>
            <span class="pull-right-container">
              <!--<small class="label pull-right bg-green">new</small>-->
            </span>
          </a>
        </li>
		  <li>
  <a href="upload_qustion_bank.php">
    <i class="fa fa-fw fa-upload"></i> <span>Upload Question Bank</span>
    <span class="pull-right-container">
      <!--<small class="label pull-right bg-green">new</small>-->
    </span>
  </a>
</li> 
		
		  	       <li class=" treeview">
          <a href="#">
            <i class="fa fa-fw fa-tv"></i> <span>View Question Bank</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
         <ul class="treeview-menu">
					   
   <li class="treeview">
          <a href="#">
            <i class="fa fa-fw fa-university"></i> <span>Department</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>		
          <ul class="treeview-menu">
<?php
	include 'db_function.php';
	$doctor=$obj->getAll('SELECT * FROM `department`');
	foreach($doctor as $key=>$value)
	{
		extract($value);			
?>		
           <li class="treeview">
              <a href="#"><i class="fa fa-fw fa-book"></i> <?php echo str_replace('Department of','',$dept_name);?>
                <span class="pull-right-container">
                  <i class="fa fa-angle-left pull-right"></i>
                </span>
              </a>
			                 <ul class="treeview-menu">
			   <?php 
					$ok=$obj->getAll('SELECT * FROM `subject` WHERE `dept_id`='.$dept_id);
					foreach($ok as $key=>$sub)
					{
						extract($sub);
			   ?>			   

                <li><a href="view_question.php?subid=<?=$sub_id;?>"><i class="fa fa-fw fa-file-text-o"></i> <?php echo $subject_name;?></a></li>
 		   
			   
			<?php } ?>	
								              </ul>	
<?php } ?>

            </li>
            <!--<li><a href="#"><i class="fa fa-circle-o"></i> Level One</a></li>-->
          </ul>
        </li>		  
		  
					   </ul>
		  </li>
 <li>
  <a href="message1.php">
    <i class="fa fa-fw fa-sticky-note-o"></i> <span>Message for Teachers</span>
    <span class="pull-right-container">
      <!--<small class="label pull-right bg-green">new</small>-->
    </span>
  </a>
</li>



        
<li class="header">Teacher Main Navigation</li>
<li class=" treeview">
<a href="add_question.php">
<i class="fa fa-fw fa-pencil-square-o"></i> <span>Input Question Bank</span>
<span class="pull-right-container">
<i class="fa fa-angle-left pull-right"></i>
</span>
</a>	  
<ul class="treeview-menu">
<li><a href="add_question.php"><i class="fa fa-fw fa-plus-square-o"></i> <span>Add Question Baank</span></a></li>
<!--<li><a href="remove-teacher.php"><i class="fa fa-fw fa-pencil-square-o"></i><span>Remove Teacher</span></a></li>-->


</ul>
</li>
		        <li class=" treeview">
          <a href="#">
            <i class="fa fa-fw fa-tv"></i> <span>View Question Bank</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
         <ul class="treeview-menu">
		  			   <?php 
	               @session_start();
	                   $tid=$_SESSION['dept'];
					$ok=$obj->getAll('SELECT * FROM `subject` WHERE `dept_id`='.$tid);
					foreach($ok as $key=>$sub)
					{
						extract($sub);
			   ?>			   

                <li><a href="view_question.php?subid=<?=$sub_id;?>"><i class="fa fa-fw fa-file-text-o"></i> <?php echo $subject_name;?></a></li>
 		   
			   
			<?php } ?>	
								          
					
					
					</ul>	
               </li>
		      <li>
			  <a href="download_qp2.php">
              <i class="fa fa-fw fa-book"></i> <span>Previous Question Papers</span>
              <span class="pull-right-container">
              <!--<small class="label pull-right bg-green">new</small>-->
              </span>
              </a>
              </li>
		  <li class=" treeview">
<a href="#">
<i class="fa fa-fw fa-gear"></i> <span>Profile Settings</span>
<span class="pull-right-container">
<i class="fa fa-angle-left pull-right"></i>
</span>
</a>	  
<ul class="treeview-menu">
<li><a href="reg.php"><i class="fa fa-fw fa-user"></i> <span>Change Profile</span></a></li>
<li><a href="change_pass.php"><i class="fa fa-fw fa-wrench"></i><span>Change Password</span></a></li>
<li><a href="remove-teacher.php"><i class="fa fa-fw fa-ban"></i><span>Delete Account</span></a></li>


</ul>
</li>
		       
		  
		 <li class="header">Examiner Main Navigation</li>
		  		   <li>
			  <a href="download_qp.php">
              <i class="fa fa-fw fa-book"></i> <span>Download Question Papers</span>
              <span class="pull-right-container">
              <!--<small class="label pull-right bg-green">new</small>-->
              </span>
              </a>
              </li>

 <li>
        <a href="download_qp2.php">
              <i class="fa fa-fw fa-book"></i> <span>Old Question Papers</span>
              <span class="pull-right-container">
              <!--<small class="label pull-right bg-green">new</small>-->
              </span>
              </a>
              </li>

		  
		  <li class=" treeview">
<a href="#">
<i class="fa fa-fw fa-gear"></i> <span>Profile Settings</span>
<span class="pull-right-container">
<i class="fa fa-angle-left pull-right"></i>
</span>
</a>	  
<ul class="treeview-menu">
<li><a href="reg.php"><i class="fa fa-fw fa-user"></i> <span>Change Profile</span></a></li>
<li><a href="change_pass.php"><i class="fa fa-fw fa-wrench"></i><span>Change Password</span></a></li>
<li><a href="remove-teacher.php"><i class="fa fa-fw fa-ban"></i><span>Delete Account</span></a></li>


</ul>
</li>
<li>
  <a href="message.php">
    <i class="fa fa-fw fa-sticky-note-o"></i> <span>Message for Administrator</span>
    <span class="pull-right-container">
      <!--<small class="label pull-right bg-green">new</small>-->
    </span>
  </a>
</li>
	     
              
		  
		  
<?php
		 }
else if($role=='teacher')
{
	?>
<!--<li class="header">Teacher Main Navigation</li>-->
<li class=" treeview">
<a href="#">
<i class="fa fa-fw fa-pencil-square-o"></i> <span>Input Question Bank</span>
<span class="pull-right-container">
<i class="fa fa-angle-left pull-right"></i>
</span>
</a>	  
<ul class="treeview-menu">
<li><a href="add_question.php"><i class="fa fa-fw fa-plus-square-o"></i> <span>Add Question Baank</span></a></li>
<li><a href="remove-teacher.php"><i class="fa fa-fw fa-pencil-square-o"></i><span>Remove Teacher</span></a></li>
</ul>
</li>
		     <li class=" treeview">
          <a href="#">
            <i class="fa fa-fw fa-tv"></i> <span>View Question Bank</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
         <ul class="treeview-menu">
		  			   <?php 
	               @session_start();
	                   $tid=$_SESSION['dept'];
					$ok=$obj->getAll('SELECT * FROM `subject` WHERE `dept_id`='.$tid);
					foreach($ok as $key=>$sub)
					{
						extract($sub);
			   ?>			   

                <li><a href="view_question.php?subid=<?=$sub_id;?>"><i class="fa fa-fw fa-file-text-o"></i> <?php echo $subject_name;?></a></li>
 		   
			   
			<?php } ?>	
								          
					
					
					</ul>	
               </li>
		  
		      <li>
			  <a href="download_qp2.php">
              <i class="fa fa-fw fa-book"></i> <span>Previous Question Papers</span>
              <span class="pull-right-container">
              <!--<small class="label pull-right bg-green">new</small>-->
              </span>
              </a>
              </li>
		  <li class=" treeview">
<a href="#">
<i class="fa fa-fw fa-gear"></i> <span>Profile Settings</span>
<span class="pull-right-container">
<i class="fa fa-angle-left pull-right"></i>
</span>
</a>	  
<ul class="treeview-menu">
<!--<li><a href="reg.php"><i class="fa fa-fw fa-user"></i> <span>Change Profile</span></a></li>-->
<li><a href="change_pass.php"><i class="fa fa-fw fa-wrench"></i><span>Change Password</span></a></li>
<li><a href="remove-teacher.php"><i class="fa fa-fw fa-ban"></i><span>Delete Account</span></a></li>


</ul>
</li>
		         <li>
			  <a href="signout.php">
              <i class="fa fa-fw fa-sign-out"></i> <span>SignOut</span>
              <span class="pull-right-container">
              <!--<small class="label pull-right bg-green">new</small>-->
              </span>
              </a>
              </li>
		<?php

	}
		  elseif($role=='examiner'){
		
			 ?>
 <!--<li class="header">Examiner Main Navigation</li>-->
		  		   <li>
			  <a href="download_qp.php">
              <i class="fa fa-fw fa-book"></i> <span>Download Question Papers</span>
              <span class="pull-right-container">
              <!--<small class="label pull-right bg-green">new</small>-->
              </span>
              </a>
              </li>

<li>
        <a href="download_qp2.php">
              <i class="fa fa-fw fa-book"></i> <span>Old Question Papers</span>
              <span class="pull-right-container">
              <!--<small class="label pull-right bg-green">new</small>-->
              </span>
              </a>
              </li>

		  


		  
		  <li class=" treeview">
<a href="#">
<i class="fa fa-fw fa-gear"></i> <span>Profile Settings</span>
<span class="pull-right-container">
<i class="fa fa-angle-left pull-right"></i>
</span>
</a>	  
<ul class="treeview-menu">

<li><a href="change_pass.php"><i class="fa fa-fw fa-wrench"></i><span>Change Password</span></a></li>
<li><a href="remove-teacher.php"><i class="fa fa-fw fa-ban"></i><span>Delete Account</span></a></li>


</ul>
</li>
		  		 <!--<li>
          <a href="message.php">
            <i class="fa fa-fw fa-sticky-note-o"></i> <span>Message for Administrator</span>
            <span class="pull-right-container">
              <!--<small class="label pull-right bg-green">new</small>-->
            <!--</span>
          </a>
        </li>-->
	  
		  
		  
		  <?php
			  
		  }
		  
		  ?>

          <li>
        <a href="signout.php">
              <i class="fa fa-fw fa-sign-out"></i> <span>SignOut</span>
              <span class="pull-right-container">
              <!--<small class="label pull-right bg-green">new</small>-->
              </span>
              </a>
              </li> 


		  </li>
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>
