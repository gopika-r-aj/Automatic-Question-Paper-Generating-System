<?php 
	include 'head-section.php';
	include 'top-bar.php';
	include 'side-menu.php';
	?>
<script src="//code.jquery.com/jquery-1.12.0.min.js"></script>
	<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
       Genereate Question Paper for Examination
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Forms</a></li>
        <li class="active">Advanced Elements</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">

      <!-- SELECT2 EXAMPLE -->
      <div class="box box-default">
        <div class="box-header with-border">
          <h3 class="box-title">Input Question Paper Details</h3>

          <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
            <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-remove"></i></button>
          </div>
        </div>
        <!-- /.box-header -->
        <div class="box-body">
		<form action="invoice_1/invoice_1.php" method="post">
          <div class="row">
            <div class="col-md-6">
				<div class="form-group">
                  <label>College Name</label>
                  <input type="text" class="form-control" required="required" name="cname" placeholder="Name of College">
                </div>
					<div class="form-group">
                  <label>Name of Examination</label>
                  <input type="text" class="form-control" required="required" name="ename" placeholder="Name of Examination with Month and Year">
                </div>
				<div class="form-group">
                <label>Course Name </label>
              <select name="dept" id="state-list"  onChange="getCity(this.value);" required="required" name="course" class="form-control select2 select2-hidden-accessible" style="width: 100%;" tabindex="-1" aria-hidden="true">					
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
						<div class="form-group">
                <label>Name of Subject </label>
                <select id="city-list" onChange="getCode(this.value);" required="required" class="form-control select2 select2-hidden-accessible" name="subject" style="width: 100%;"  tabindex="-1" aria-hidden="true">					
                      	<?php
							
							$ok=$obj->getAll('SELECT * FROM `subject`');
							foreach($ok as $key=>$sub)
							{
							  extract($sub);
							  echo"<option value='$sub_id'>$subject_name</option>";
							}
							
						?>
                </select>
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
function getCode(val) {
  $.ajax({
  type: "POST",
  url: "db_function.php",
  data:'co_id='+val,
  success: function(data){
    //alert(data);
    $('#textBoxIwant').val(data); // json result
  }

  });


}
</script>            
				</div>

            
            </div>
            <!-- /.col -->
            <div class="col-md-6">
			<br><br><br><br><br><br><br>
				 
              <div class="form-group">
                  <label>Course Code</label>
                  <input id="textBoxIwant" readonly="readonly" type="text" required="required" class="form-control" name="course_code" placeholder="Course Code">
                </div>
            
            </div>
            <!-- /.col -->
			  
          </div>
          <!-- /.row -->
			<div class="row">
				<div class="col-xs-3">
				<div class="form-group">
                <label>Number of Questions in Part A </label>
                <select class="form-control select2" name="part_a" required="required" style="width: 50%;">
                  <option selected="selected">--</option>
                  <option value="12">12</option>
                  <option value="11">11 </option>
                  <option value="10">10</option>
                  <option value="9">09</option>
                  <option value="8">08</option>
                  <option value="7">07</option>
                  <option value="6">06</option>
                  <option value="5">05</option>
                  <option value="4">04</option>
                  <option value="3">03</option>
                  <option value="2">02</option>
                  <option value="1">01</option>
                  <option value="0">00</option>
                </select>
				</div>
				</div>
				<div class="col-xs-3">
				<div class="form-group">
                <label>Number of Questions in Part B</label>
                <select class="form-control select2" name="part_b" required="required" style="width: 50%;">
                  <option selected="selected">--</option>
                  <option value="9">09</option>
                  <option value="8">08</option>
                  <option value="7">07</option>
                  <option value="6">06</option>
                  <option value="5">05</option>
                  <option value="4">04</option>
                  <option value="3">03</option>
                  <option value="2">02</option>
                  <option value="1">01</option>
                  <option value="0">00</option>
                </select>
				</div>
				</div>
				<div class="col-xs-3">
				<div class="form-group">
                <label>Number of Questions in Part C </label>
                <select class="form-control select2" name="part_c" required="required" style="width: 50%;">
                  <option selected="selected">--</option>
                  <option value="4">04</option>
                  <option value="3">03</option>
                  <option value="2">02</option>
                  <option value="1">01</option>
                  <option value="0">00</option>
                </select>
				</div>
				</div>
			</div>
			<div class="row">
			<div class="col-xs-3">
				<label>Time Duration of Examination</label>
                  <input type="text" name="time_exam" class="form-control" required="required" placeholder=>
                </div>
			&nbsp;
			<div class="col-xs-3">
				<label>Total Mark of Examination</label>
                  <input type="text" name="total_mark" class="form-control" required="required" placeholder=>
                </div>
			<div class="col-xs-3">
				<label>Question Paper Code</label>
                  <input type="text" name="qp_code" class="form-control" required="required" placeholder=>
                </div>
			
        </div>
		  &nbsp;&nbsp;&nbsp;<label>Module for Examination</label>
		  <div class="checkbox">
                    <label>
                     &nbsp;&nbsp;&nbsp; <input value="module=1 OR " name="mod_1" type="checkbox">
                      Module No.1
                    </label>
			    <label>
                     &nbsp;&nbsp;&nbsp; <input value="module=2 OR " name="mod_2" type="checkbox">
                      Module No.2
                    </label>
			    <label>
                     &nbsp;&nbsp;&nbsp; <input value="module=3 OR" name="mod_3" type="checkbox">
                      Module No.3
                    </label>
			    <label>
                     &nbsp;&nbsp;&nbsp; <input value="module=4 OR " name="mod_4" type="checkbox">
                      Module No.4
                    </label>
			    <label>
                     &nbsp;&nbsp;&nbsp; <input value="module=5" name="mod_5" type="checkbox">
                      Module No.5
                    </label>
          
		  </div>
		       	  
        <!-- /.box-body -->
        <div class="box-footer">
                <button type="submit" class="btn btn-default">Cancel</button>
                <button type="submit" name="qp_gen" class="btn btn-info pull-right">GO</button>
              </div>
			</form>
		  
            </div>	
		  
      </div>
		  
      <!-- /.box -->
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/core.js" integrity="sha256-36hEPcG8mKookfvUVvEqRkpdYV1unP6wvxIqbgdeVhk=" crossorigin="anonymous"></script>
<script>
    $('#selectLoco').on('change', function(){
    selectLoco = $('#selectLoco option:selected').val(); // the dropdown item selected value
    $.ajax({
        type :'POST',
        dataType:'json',
        data : { selectLoco : selectLoco },
        url : 'db_function.php',
        success : function(result){
              $('#textBoxIwant').val(result['course_code']); // json result

              //document.getElementById("demo").innerHTML =   
               // alert(result['price']);   
        }
    });

});
</script>



<?php
	include 'footer.php';
?>

