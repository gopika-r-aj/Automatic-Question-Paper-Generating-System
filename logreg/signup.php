<?php
include_once('../QP_Admin/controllers/connection.php');
$obj=new Connection;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sign Up for Teacher</title>

    <!-- Font Icon -->
    <link rel="stylesheet" href="fonts/material-icon/css/material-design-iconic-font.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/material-design-iconic-font/2.2.0/css/material-design-iconic-font.min.css" integrity="sha256-3sPp8BkKUE7QyPSl6VfBByBroQbKxKG7tsusY2mhbVY=" crossorigin="anonymous" />
	<script src="//code.jquery.com/jquery-1.12.0.min.js"></script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
	
    <!-- Main css -->
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

    <div class="main">

        <!-- Sign up form -->
        <section class="signup">
            <div class="container">
                <div class="signup-content">
                    <div class="signup-form">
                        <h2 class="form-title">Sign up</h2>
                        <form method="POST" class="register-form" id="register-form" action="../QP_Admin/db_function.php">
                            <div class="form-group">
                                <label for="name"><i class="zmdi zmdi-account material-icons-name"></i></label>
                                <input type="text" name="fname" id="name" required="required" pattern="^[a-zA-Z_ ]*$" title="Only allowed char a-z or A-Z" oninput="if (typeof this.reportValidity === 'function') {this.reportValidity();}" placeholder="Your Name"/>
                            </div> 
							
							 <div class="form-group">
                                <label for="name"><i class="zmdi zmdi-balance"></i></label>
                                <input type="text" name="cname" id="name" required="required" placeholder="College Name"/>
                            </div>
							
							
							 <div class="form-group">
	                           	  <label for="select"><i class="zmdi zmdi-home"></i></label>
								  <select name="dept" class="form-control selectselect2-hidden-accessible" required="required" style="width: 100%;" tabindex="-1" aria-hidden="true">	
									   <option value="">
										Name of Department
									   </option>
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
							 <!--<div class="form-group">
                                <label for="pass"><i class="zmdi zmdi-lock"></i></label>
                                <input type="password" name="dept_id" id="pass" required="required"  placeholder="Department ID"/>
                            </div>-->
							<div class="form-group">
                                <label for="text"><i class="zmdi zmdi-phone"></i></label>
                                <input type="text" name="phno" id="phno" required="required" pattern="^((0091)|(\+91)|0?)[789]{1}\d{9}$"  required="required" pattern="/(6|7|8|9)\d{0-9}/" title="Only 10 digits are allowed must be start with 6,7,8,9 " oninput="if (typeof this.reportValidity === 'function') {this.reportValidity();}" placeholder="Mobile No."/>
                            </div>
                            <div class="form-group">
                                <label for="email"><i class="zmdi zmdi-email"></i></label>
                                <input type="email" name="email"  required="required" id="email" placeholder="Your Email"/>
                            </div>
                            <div class="form-group">
                                <label for="pass"><i class="zmdi zmdi-lock"></i></label>
                                <input type="password" name="password" id="pass" required="required" pattern="(?=^.{8,}$)((?=.*\d)|(?=.*\W+))(?![.\n])(?=.*[A-Z])(?=.*[a-z]).*$" title="You must enter at least 8 characters including digit letter upper case and lower case" oninput="if (typeof this.reportValidity === 'function') {this.reportValidity();}"  placeholder="Password"/>
                            </div>
                            <div class="form-group">
                                <label for="re-pass"><i class="zmdi zmdi-lock-outline"></i></label>
                                <input type="password" name="re_password" id="re_pass"  required="required" pattern="(?=^.{8,}$)((?=.*\d)|(?=.*\W+))(?![.\n])(?=.*[A-Z])(?=.*[a-z]).*$" title="You must enter at least 8 characters including digit letter upper case and lower case"  placeholder="Repeat your password"/>
                            </div>
                            <div class="form-group">
                                <input type="checkbox" name="agree-term" id="agree-term" class="agree-term" />
                                <label for="agree-term" class="label-agree-term"><span><span></span></span>I agree all statements in  <a href="#" class="term-service">Terms of service</a></label>
                            </div>
                            <div class="form-group form-button">
                                <input type="submit" name="t_reg1" onClick="alert()" id="signup" class="form-submit" value="Register"/>
                            </div>
                        </form>
                    </div>
                    <div class="signup-image">
                        <figure><img src="images/signup-image.jpg" alt="sing up image"></figure>
                        <a href="signin.html" class="signup-image-link">I am already member</a>
                    </div>
				
                </div>
            </div>
        </section>

      
    </div>

    <!-- JS -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="js/main.js"></script>
	<script>
	function alert()
		{
			swal("Registration Susscessfull", "Plese wait for Admin Approvel", "success");
		}
		</script>
</body>
</html>