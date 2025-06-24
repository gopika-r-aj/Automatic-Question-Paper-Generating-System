<?php 
	include 'head-section.php';
	include 'top-bar.php';
	include 'side-menu.php';

?>
<script>
	
</script>


<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
	  <section class="content">
<div class="register-box">
  

  <div class="register-box-body">
      <div class="register-logo">
    <a href="home.php"><b>Easy</b>Exam</a>
  </div> 
  
    <p class="login-box-msg">Registeration for New Teacher</p>

    <form action="db_function.php" method="post">
      <div class="form-group has-feedback">
        <input type="text" class="form-control" name="fname" required="required" pattern="^[a-zA-Z_ ]*$" title="Only allowed char a-z or A-Z" oninput="if (typeof this.reportValidity === 'function') {this.reportValidity();}" placeholder="Full name">
        <span class="glyphicon glyphicon-user form-control-feedback"></span>
      </div>
	  <div class="form-group has-feedback">
        <input type="text" class="form-control" required="required" name="cname" placeholder="College Name">
		
        <span class="fa fa-fw fa-university form-control-feedback"></span>
      </div>
	  <div class="form-group has-feedback">
	  <select name="dept" class="form-control select2 select2-hidden-accessible"    required="required" style="width: 100%;" tabindex="-1" aria-hidden="true">
					<option value="">Name of Department</option>
                  	<?php
							$doctor=$obj->getAll('SELECT * FROM `department`');
							foreach($doctor as $key=>$value)
							{
							  extract($value);
							  echo"<option value='$dept_id'>$dept_name</option>";
							}
						?>
                </select>
				</div>
	
		<div class="form-group has-feedback">
        <input type="text" name="phno" class="form-control" required="required" pattern="^((0091)|(\+91)|0?)[789]{1}\d{9}$" required="required"pattern="/(6|7|8|9)\d{9}/" title="Only 10 digits are allowed must be start with 6,7,8,9 " oninput="if (typeof this.reportValidity === 'function') {this.reportValidity();}" placeholder="Mobile No.">
        <span class="glyphicon glyphicon-earphone form-control-feedback"></span>
      </div>
      <div class="form-group has-feedback">
        <input type="email" name="email" class="form-control"  required="required" placeholder="Email">
        <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
      </div>
      <div class="form-group has-feedback">
        <input type="password" name="password" class="form-control" required="required" pattern="(?=^.{8,}$)((?=.*\d)|(?=.*\W+))(?![.\n])(?=.*[A-Z])(?=.*[a-z]).*$" title="You must enter at least 8 characters including digit letter upper case and lower case" oninput="if (typeof this.reportValidity === 'function') {this.reportValidity();}" placeholder="Password">
        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
      </div>
      <div class="form-group has-feedback">
        <input type="password" name="re_password" class="form-control" id="form-name" required="required" pattern="(?=^.{8,}$)((?=.*\d)|(?=.*\W+))(?![.\n])(?=.*[A-Z])(?=.*[a-z]).*$" title="You must enter at least 8 characters including digit letter upper case and lower case" placeholder="Retype password">
        <span class="glyphicon glyphicon-log-in form-control-feedback"></span>
      </div>
      <div class="row">
        <div class="col-xs-8">
          <div class="checkbox icheck">
            <label>
              <input type="checkbox"> I agree to the <a href="#">terms</a>
            </label>
          </div>
        </div>
        <!-- /.col -->
        <div class="col-xs-4">
          <button type="submit" name="t_reg" class="btn btn-primary btn-block btn-flat">OK</button>
        </div>
        <!-- /.col -->
      </div>
    </form>
  </div>
  <!-- /.form-box -->
</div>
<!-- /.register-box -->
	  </section>
</div>
<?php
include 'footer.php';
?>