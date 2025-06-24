<?php 
	include 'head-section.php';
	include 'top-bar.php';
	include 'side-menu.php';
?>
<script src="//code.jquery.com/jquery-1.12.0.min.js"></script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
<link href="https://gitcdn.github.io/bootstrap-toggle/2.2.2/css/bootstrap-toggle.min.css" rel="stylesheet">
<script src="https://gitcdn.github.io/bootstrap-toggle/2.2.2/js/bootstrap-toggle.min.js"></script>
  <!-- Content Wrapper. Contains page content -->
<!--<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>-->

  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Remove Examiner 
        <small></small>
      </h1>
      <!--<ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Tables</a></li>
        <li class="active">Data tables</li>
      </ol>-->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
       
          <div class="box">
			  <form id="myForm" method="POST" action="db_function.php" >
            <div class="box-header">
              <h3 class="box-title">Examiner Details</h3>
				
            </div>

            <!-- /.box-header -->
            <div class="box-body">
				 <!-- <label>Block all Teachers</label>
			 <input type="checkbox" data-toggle="toggle" name="block" data-onstyle="success" data-offstyle="danger">-->
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>Examiner Name</th>
                  <th>College Name</th>
				  <th>Phone NO.</th>
                  <th>Email id</th>
                  <th>Delete</th>
                  <th>Block</th>
                </tr>
                </thead>
				  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-ajaxy/1.6.1/scripts/jquery.ajaxy.min.js" integrity="sha256-jfr3oM7h2TWPi2Q0O0vPuRh+pc0eSfWfpZ2nHXt8tFQ=" crossorigin="anonymous"></script>
                <tbody>					
					<?php 
						$exam=$obj->getAll('SELECT examiner_id,name,college_name,phno,email,status FROM `reg_examiner` WHERE 1');
						foreach($exam as $value)
						{
							extract($value);
							echo "<tr>
							  <td>$name</td>
							  <td>$college_name</td>
							  <td>$phno</td>
							  <td>$email</td>  
							  <td>
							  	<a class='delete'  href='db_function.php?d_examiner=$examiner_id'>
								<button type='button' class='btn btn-primary'>Delete</button>
								</a>
								</td>
							  	  <td>";
								if($status==1)
							  {
							   echo "<a href='db_function.php?u_block2=$examiner_id'><button type='button' id='button' name='u_block' class='btn btn-success'>Unblock</button></a>";
				        		}
								else{
								 echo "<a href='db_function.php?block2=$examiner_id'><button type='button' id='button' name='block' class='btn btn-danger'>Block</button></a>";
								}
                               echo "</td>
							   
							</tr>";			
						}
					?>
                </tbody>
				  <script>
				  	$("#block").change(function () {
    var value = $(this).val();
    $.ajax({
        type: "POST",
        url: "db_function.php",
        async: true,
        data: {
            action1: value // as you are getting in php $_POST['action1'] 
			alert('Success');
        },
        success: function (msg) {
            alert('Success');
            if (msg != 'success') {
                alert('Fail');
            }
        }
    });
});
				  </script>
                <!--<tfoot>
                <tr>
                  <th>Examiner Name</th>
                  <th>College Name</th>
                  <th>Email id</th>
                  <th>Phone NO.</th>
                  <th>Delete</th>
                </tr>
                </tfoot>-->
              </table>
            </div>
			  </form>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

<script>
function myFunction() {
  return confirm("Are Sure Want U Delete!");
}
</script>
<script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
<script language="JavaScript" type="text/javascript">
$(document).ready(function(){
    $("a.delete").click(function(e){
        if(!confirm('Are you sure?')){
            e.preventDefault();
            return false;
        }
        return true;
    });
});
</script>

<?php if(isset($_GET["success?"])){
$obj->sweetalert('success',' Successfully Unblocked','remove_examiner.php');}


if(isset($_GET["OK"])){
$obj->sweetalert('success','you have successfully Deleted Profile','remove_examiner.php');}


if(isset($_GET["pay?"])){
$obj->sweetalert('error','The given Examiner Access is Blocked','remove_examiner.php');}


if(isset($_GET["cancel"])){
$obj->sweetalert('error','you have successfully cancelled booking','remove_examiner.php');}
?>


<?php
	/*if(isset($_GET['success']))
	{
		$obj->alert('Item Deleted','success');
		header('location:remove_examiner.php');
	}*/	
?>
<?php
	include 'footer.php';
?>
