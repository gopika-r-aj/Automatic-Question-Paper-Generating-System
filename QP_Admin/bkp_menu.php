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
          <p>ViShNu RaJ</p>
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
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
          <a href="view_login_examiner.php">
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
          <a href="error500.php">
            <i class="fa fa-fw fa-check-square-o"></i> <span>Teachers Verification</span>
            <span class="pull-right-container">
              <!--<small class="label pull-right bg-yellow">12</small>-->
              <small class="label pull-right bg-green">16</small>
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
          <a href="remove-teacher.php">
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

                <li><a href="#"><i class="fa fa-fw fa-file-text-o"></i> <?php echo $subject_name;?></a></li>
 		   
			   
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
		  
		  
<?php
if($role=='teacher')
{
	?>

	<?php
	
}
		  ?>
		  
		  
		   <li class="header">Teacher Main Navigation</li>
<li class=" treeview">
<a href="#">
<i class="fa fa-fw fa-pencil-square-o"></i> <span>Input Question Bank</span>
<span class="pull-right-container">
<i class="fa fa-angle-left pull-right"></i>
</span>
</a>	  
<ul class="treeview-menu">
<li><a href="reg.php"><i class="fa fa-fw fa-plus-square-o"></i> <span>Add Question Baank</span></a></li>
<li><a href="remove-teacher.php"><i class="fa fa-fw fa-pencil-square-o"></i><span>Remove Teacher</span></a></li>


</ul>
</li>
		  
		      <li>
			  <a href="question-paper-gen.php">
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
<li><a href="remove-teacher.php"><i class="fa fa-fw fa-wrench"></i><span>Change Password</span></a></li>
<li><a href="remove-teacher.php"><i class="fa fa-fw fa-ban"></i><span>Delete Account</span></a></li>


</ul>
</li>
		         <li>
			  <a href="question-paper-gen.php">
              <i class="fa fa-fw fa-sign-out"></i> <span>SignOut</span>
              <span class="pull-right-container">
              <!--<small class="label pull-right bg-green">new</small>-->
              </span>
              </a>
              </li>
		   <li class="header">Examiner Main Navigation</li>
		  		   <li>
			  <a href="question-paper-gen.php">
              <i class="fa fa-fw fa-book"></i> <span>Download Question Papers</span>
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
          <a href="message1.php">
            <i class="fa fa-fw fa-sticky-note-o"></i> <span>Message for Administrator</span>
            <span class="pull-right-container">
              <!--<small class="label pull-right bg-green">new</small>-->
            </span>
          </a>
        </li>
		      <li>
			  <a href="">
              <i class="fa fa-fw fa-sign-out"></i> <span>SignOut</span>
              <span class="pull-right-container">
              <!--<small class="label pull-right bg-green">new</small>-->
              </span>
              </a>
              </li>
		<li class="treeview">
          <a href="#">
            <i class="fa fa-files-o"></i>
            <span>Layout Options</span>
            <span class="pull-right-container">
              <span class="label label-primary pull-right">4</span>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="pages/layout/top-nav.html"><i class="fa fa-circle-o"></i> Top Navigation</a></li>
            <li><a href="pages/layout/boxed.html"><i class="fa fa-circle-o"></i> Boxed</a></li>
            <li><a href="pages/layout/fixed.html"><i class="fa fa-circle-o"></i> Fixed</a></li>
            <li><a href="pages/layout/collapsed-sidebar.html"><i class="fa fa-circle-o"></i> Collapsed Sidebar</a></li>
          </ul>
        </li>
       <li>
          <a href="pages/widgets.html">
            <i class="fa fa-th"></i> <span>Widgets</span>
            <span class="pull-right-container">
              <!--<small class="label pull-right bg-green">new</small>-->
            </span>
          </a>
	  </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-pie-chart"></i>
            <span>Charts</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="pages/charts/chartjs.html"><i class="fa fa-circle-o"></i> ChartJS</a></li>
            <li><a href="pages/charts/morris.html"><i class="fa fa-circle-o"></i> Morris</a></li>
            <li><a href="pages/charts/flot.html"><i class="fa fa-circle-o"></i> Flot</a></li>
            <li><a href="pages/charts/inline.html"><i class="fa fa-circle-o"></i> Inline charts</a></li>
          </ul>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-laptop"></i>
            <span>UI Elements</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="pages/UI/general.html"><i class="fa fa-circle-o"></i> General</a></li>
            <li><a href="pages/UI/icons.html"><i class="fa fa-circle-o"></i> Icons</a></li>
            <li><a href="pages/UI/buttons.html"><i class="fa fa-circle-o"></i> Buttons</a></li>
            <li><a href="pages/UI/sliders.html"><i class="fa fa-circle-o"></i> Sliders</a></li>
            <li><a href="pages/UI/timeline.html"><i class="fa fa-circle-o"></i> Timeline</a></li>
            <li><a href="pages/UI/modals.html"><i class="fa fa-circle-o"></i> Modals</a></li>
          </ul>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-edit"></i> <span>Forms</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="pages/forms/general.html"><i class="fa fa-circle-o"></i> General Elements</a></li>
            <li><a href="pages/forms/advanced.html"><i class="fa fa-circle-o"></i> Advanced Elements</a></li>
            <li><a href="pages/forms/editors.html"><i class="fa fa-circle-o"></i> Editors</a></li>
          </ul>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-table"></i> <span>Tables</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="pages/tables/simple.html"><i class="fa fa-circle-o"></i> Simple tables</a></li>
            <li><a href="pages/tables/data.html"><i class="fa fa-circle-o"></i> Data tables</a></li>
          </ul>
        </li>
        <li>
          <a href="pages/calendar.html">
            <i class="fa fa-calendar"></i> <span>Calendar</span>
            <span class="pull-right-container">
              <small class="label pull-right bg-red">3</small>
              <small class="label pull-right bg-blue">17</small>
            </span>
          </a>
        </li>
        <li>
          <a href="pages/mailbox/mailbox.html">
            <i class="fa fa-envelope"></i> <span>Mailbox</span>
            <span class="pull-right-container">
              <small class="label pull-right bg-yellow">12</small>
              <small class="label pull-right bg-green">16</small>
              <small class="label pull-right bg-red">5</small>
            </span>
          </a>
        </li>
       <li class="treeview">
          <a href="#">
            <i class="fa fa-folder"></i> <span>Examples</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="pages/examples/invoice.html"><i class="fa fa-circle-o"></i> Invoice</a></li>
            <li><a href="pages/examples/profile.html"><i class="fa fa-circle-o"></i> Profile</a></li>
            <li><a href="pages/examples/login.html"><i class="fa fa-circle-o"></i> Login</a></li>
            <li><a href="pages/examples/register.html"><i class="fa fa-circle-o"></i> Register</a></li>
            <li><a href="pages/examples/lockscreen.html"><i class="fa fa-circle-o"></i> Lockscreen</a></li>
            <li><a href="pages/examples/404.html"><i class="fa fa-circle-o"></i> 404 Error</a></li>
            <li><a href="pages/examples/500.html"><i class="fa fa-circle-o"></i> 500 Error</a></li>
            <li><a href="pages/examples/blank.html"><i class="fa fa-circle-o"></i> Blank Page</a></li>
            <li><a href="pages/examples/pace.html"><i class="fa fa-circle-o"></i> Pace Page</a></li>
          </ul>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-share"></i> <span>Multilevel</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
           
            <li class="treeview">
              <a href="#"><i class="fa fa-circle-o"></i> Level One
                <span class="pull-right-container">
                  <i class="fa fa-angle-left pull-right"></i>
                </span>
              </a>
              <ul class="treeview-menu">
                <li><a href="#"><i class="fa fa-circle-o"></i> Level Two</a></li>
                <li class="treeview">
                  <a href="#"><i class="fa fa-circle-o"></i> Level Two
                    <span class="pull-right-container">
                      <i class="fa fa-angle-left pull-right"></i>
                    </span>
                  </a>
                  <ul class="treeview-menu">
                    <li><a href="#"><i class="fa fa-circle-o"></i> Level Three</a></li>
                    <li><a href="#"><i class="fa fa-circle-o"></i> Level Three</a></li>
                  </ul>
                </li>
              </ul>
            </li>
            <li><a href="#"><i class="fa fa-circle-o"></i> Level One</a></li>
          </ul>
        </li>
        <li><a href="https://adminlte.io/docs"><i class="fa fa-book"></i> <span>Documentation</span></a></li>
        <li class="header">LABELS</li>
        <li><a href="#"><i class="fa fa-circle-o text-red"></i> <span>Important</span></a></li>
        <li><a href="#"><i class="fa fa-circle-o text-yellow"></i> <span>Warning</span></a></li>
        <li><a href="#"><i class="fa fa-circle-o text-aqua"></i> <span>Information</span></a></li>
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>
