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
    <title>Forgot Password </title>

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
                        <h2 class="form-title">Forgot Password</h2>
                        <form method="POST" class="register-form" id="register-form" action="../QP_Admin/db_function.php">
                         
							
							
							  <div class="form-group">
                                <label for="email"><i class="zmdi zmdi-email"></i></label>
                                <input type="email" name="email"  required="required" id="email" placeholder="Enter Your Registered Email id"/>
                            </div>
							 <div class="form-group">
	                           	  <label for="select"><i class="zmdi zmdi-home"></i></label>
								  <select name="role" class="form-control selectselect2-hidden-accessible" required="required" style="width: 100%;" tabindex="-1" aria-hidden="true">	
									   <option value="">
										Spacify Your Role
									   </option>
				                       <option value="teacher">As Teacher</option>
									  <option value="examiner">As Examiner</option>
								  </select>
							</div>
							
                          
                           <!-- <div class="form-group">
                                <label for="pass"><i class="zmdi zmdi-lock"></i></label>
                                <input type="password" name="password" id="pass" required="required" pattern="(?=^.{8,}$)((?=.*\d)|(?=.*\W+))(?![.\n])(?=.*[A-Z])(?=.*[a-z]).*$" title="You must enter at least 8 characters including digit letter upper case and lower case" oninput="if (typeof this.reportValidity === 'function') {this.reportValidity();}"  placeholder="Password"/>
                            </div>
                            <div class="form-group">
                                <label for="re-pass"><i class="zmdi zmdi-lock-outline"></i></label>
                                <input type="password" name="re_password" id="re_pass"  required="required" pattern="(?=^.{8,}$)((?=.*\d)|(?=.*\W+))(?![.\n])(?=.*[A-Z])(?=.*[a-z]).*$" title="You must enter at least 8 characters including digit letter upper case and lower case"  placeholder="Repeat your password"/>
                            </div>-->
                         
                            <div class="form-group form-button">
                                <input type="submit" name="forgot"  id="signup" class="form-submit" value="Next"/>
                            </div>
                        </form>
                    </div>
                    <div class="signup-image">
                        <figure><img src="images/19268.jpg" alt="sing up image"></figure>
                        <a href="signin.html" class="signup-image-link">Back to Login</a>
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