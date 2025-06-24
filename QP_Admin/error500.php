<?php 
	include 'head-section.php';
	include 'top_bar1.php';
	
?>
<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        500 Error Page
      </h1>
      <!--<ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Examples</a></li>
        <li class="active">500 error</li>
      </ol>-->
    </section>

    <!-- Main content -->
    <section class="content">

      <div class="error-page">
        <h2 class="headline text-red">500</h2>

        <div class="error-content">
          <h3><i class="fa fa-warning text-red"></i> Oops! Something went wrong.</h3>

          <p>
            Your Access is denied, Because Some Security Reason. Kindly Wait for Administrator Approvel.
            Meanwhile, you may <a href="../logreg/signin.html">return to Login</a> or use the button to Home.
          </p>

          <form class="search-form">
            <div class="input-group">
             <!-- <input type="text" name="search" class="form-control" placeholder="Search">-->

              <div class="input-group-btn">
               <a href="../home.php"><button type="button" name="submit" class="btn btn-danger btn-flat">Back to Home
                </button></a> 
              </div>
            </div>
            <!-- /.input-group -->
          </form>
        </div>
      </div>
      <!-- /.error-page -->

    </section>
    <!-- /.content -->
  </div>
<?php
	include 'footer.php';
?>