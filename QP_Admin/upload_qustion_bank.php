<?php 
	include 'head-section.php';
	include 'top-bar.php';
	include 'side-menu.php';

?>
<script>
	
</script>

<script src="//code.jquery.com/jquery-1.12.0.min.js"></script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
<link href="https://gitcdn.github.io/bootstrap-toggle/2.2.2/css/bootstrap-toggle.min.css" rel="stylesheet">
<script src="https://gitcdn.github.io/bootstrap-toggle/2.2.2/js/bootstrap-toggle.min.js"></script>
<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
	  <section class="content">
<div class="register-box">
  

  <div class="register-box-body">
      <div class="register-logo">
    <a href="home.php"><b>Easy</b>Exam</a>
  </div> 
  
    <p class="login-box-msg">Upload Question Paper</p>

    <form action="db_function.php" method="post" enctype="multipart/form-data">
      <div class="form-group has-feedback">
        <input type="text" class="form-control" name="examination_name" required="required"  placeholder="Examination Name">
        <span class="glyphicon glyphicon-pencil form-control-feedback"></span>
      </div>
	  <div class="form-group has-feedback">
        <select  id="state-list"  onChange="getCity(this.value);" required="required" name="subject_name" class="form-control select2 select2-hidden-accessible" style="width: 100%;" tabindex="-1" aria-hidden="true">
			            <option value="" >Name of Department</option>
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
          <select id="city-list" onChange="getval(this.value);" required="required" class="form-control select2 select2-hidden-accessible" name="course_name" style="width: 100%;"  tabindex="-1" aria-hidden="true">
			             <option value="" >Name of Subject</option> 
                      	<?php
							
							$ok=$obj->getAll('SELECT * FROM `subject`');
							foreach($ok as $key=>$sub)
							{
							  extract($sub);
							  echo"<option value='$subject_name'>$subject_name</option>";
							}
							
						?>
                </select>
		
       
      </div>
		<script>
function getState(val) {
  $.ajax({
  type: "POST",
  url: "db_function.php",
  data:'dept_id='+val,
  success: function(data){
    $("#state-list").html(data);
   getCity();
  }
  });
}


function getCity(val) {
  $.ajax({
  type: "POST",
  url: "db_function.php",
  data:'sub_id='+val,
  success: function(data){
    $("#city-list").html(data);
  }

  });
}
function getval(val) {
  $.ajax({
  type: "POST",
  url: "db_function.php",
  data:'sub_id1='+val,
  success: function(data){
    $("#c_code").html(data);
  }

  });
}
</script>
		
		
		
		
		<div class="form-group has-feedback">
       <label for="exampleInputFile">Examination Date</label>
        <input type="date" class="form-control" required="required" name="examination_date" placeholder="Date of Examination">
        <span class="glyphicon glyphicon-calendar form-control-feedback"></span>
    </div>


    <div class="form-group has-feedback">
       <label for="exampleInputFile">Uploaded Date</label>
        <input type="date" id="today" readonly="readonly" class="form-control" required="required" name="uploaded_date">
        <span class="glyphicon glyphicon-calendar form-control-feedback"></span>
    </div>    
	 
		<div class="form-group">
		  <label for="exampleInputFile">PDF File Question Paper</label>
		  <input type="file" name="image" required="required" accept="application/pdf" id="exampleInputFile">
		</div>	
		
      
      <div class="row">
        <div class="col-xs-8">
         
        </div>
        <!-- /.col -->
        <div class="col-xs-4">
          <button type="submit" name="qb_upload" class="btn btn-primary btn-block btn-flat">Upload</button>
        </div>
        <!-- /.col -->
      </div>
    </form>
  </div>
  <!-- /.form-box -->
</div>
<!-- /.register-box -->
	  </section>

 <section class="content-header">
      <h1>
       PDF Question Bank
        <small></small>
      </h1>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
       
          <div class="box">
			  <form id="myForm" method="POST" action="db_function.php" >
             <div id="console-event"></div>
            <div class="box-body">
               <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>Exam Name</th>
                  <th>Subject</th>
                  <th>Course</th>
                  <th>Date</th>
                  <th>Added Date</th>
                  <th>PDF</th>
                </tr>
                </thead>
                <tbody>         
          <?php 
            $teacher=$obj->getAll('SELECT a.*,b.*,c.* FROM pdf_files a, department b,subject c WHERE a.subject_name=b.dept_id AND a.course_name=c.sub_id ');
            foreach($teacher as $value)
            {
              //href='#db_function.php?d_teacher=$reg_id'
              extract($value);
              echo "<tr>
                <td>$examination_name</td>
                <td>$dept_name</td>
                <td>$subject_name</td>
                <td>$examination_date</td>
                <td>$uploaded_date</td>
                <td><a href='$file' target='_blank'><img src='pdf.png' width='40' title='View as Larger in Next Tab'/></a></td>
                <td>
               <a class='delete'  href='db_function.php?d_qppdf=$u_id'>
                  
                  
                  <button type='button' id='button' class='btn btn-danger'>Delete</button>
               </a>
                </td>
              </tr>";     
            }
          
          //data-id="{{$user->id}}"
          ?>
                </tbody>
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
</div>
<script>

/*let today = new Date().toISOString().substr(0, 10);
document.querySelector("#today").value = today;*/

// or...

 document.querySelector("#today").valueAsDate = new Date();

	
$(document).ready(function() {
  $('#mychoice').click(function() {
    var formData = $('#myForm').serialize();
    console.log('Posting the following: ', formData);
    
    $.ajax({
      url: 'db_function.php',
      data: formData,
      type: 'post',
      dataType: 'json',
      success: function(data) {
        //  ... do something with the data...
		  console.write(data)
      }
    });
  });
});	
	
	

</script>

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

<?php if(isset($_GET["success"])){
$obj->sweetalert('success',' Successfully Unblocked','upload_qustion_bank.php');}


if(isset($_GET["OK"])){
$obj->sweetalert('success','you have successfully Deleted Profile','upload_qustion_bank.php');}


if(isset($_GET["pay"])){
$obj->sweetalert('error','The given Teacher Access is Blocked','upload_qustion_bank.php');}


if(isset($_GET["cancel"])){
$obj->sweetalert('error','you have successfully cancelled booking','upload_qustion_bank.php');}
?>


	

  <!-- /.content-wrapper -->
<?php
include 'footer.php';
?>