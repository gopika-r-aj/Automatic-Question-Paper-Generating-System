<?php 
	include 'head-section.php';
	include 'top-bar.php';
	include 'side-menu.php';

?>
<script>
	
</script>


<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
	  
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
             <div id="console-event"></div>
            <div class="box-body">
               <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>Exam Name</th>
                  <th>Department</th>
                  <th>Course</th>
                  <th>Date</th>
                  <th>PDF Download/Print</th>
                </tr>
                </thead>
                <tbody>         
          <?php 
            $teacher=$obj->getAll('SELECT a.*,b.*,c.* FROM pdf_files a, department b,subject c WHERE  a.subject_name=b.dept_id AND a.course_name=c.sub_id ');
            foreach($teacher as $value)
            {
              //href='#db_function.php?d_teacher=$reg_id'
              extract($value);
              echo "<tr>
                <td>$examination_name</td>
                <td>$dept_name</td>
                <td>$subject_name</td>
                <td>$examination_date</td>
                <td><a href='$file' target='_blank'> <button type='button' id='button'  class='btn btn-success'>Download</button></a></td>
                
              </tr>";     
            }
          
          //data-id="{{$user->id}}"
          ?>
                </tbody>
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
</div>

  <!-- /.content-wrapper -->
<?php
include 'footer.php';
?>