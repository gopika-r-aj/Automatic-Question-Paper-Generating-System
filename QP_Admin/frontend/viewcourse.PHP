<?php 
	echo $header;
	echo $topmenu;
?>
<div class="container-contacts">
    <div class="container">
        <div class="page-header" id="contact">
            <h1 class="text-danger text-center">VIEW COURSE</h1>
        </div>
        <div class="row">
            <?=$alertbox;?>
        </div>

                    <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            COURSE DETAILS
                      </div>
                        <!-- /.panel-heading -->
						<?php 
						if(empty($records))
						{
							echo '<center><span class="fa fa-trash fa-5x"></span></center>';
							echo '<center><h2>No data available in this list now</h2></center>';
						}
						else
						{
						?>
                        <div class="panel-body">
                            <div class="dataTable_wrapper">
                                <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <th>COURSE NAME</th> 
                                            <th>DETAILS</th>
                                            <th>AFTER COURSE</th>
                                            <th>JOB CENTRE</th>
                                         </tr>
                                    </thead>
                                    <tbody>
                                       <?php
									foreach($records as $course){?>
                                      <tr class="gradeU">
										<td width="15%"><?=$course->course_name;?></td>
										<td width="20%"><b><?= $course->course_details;?></b></td>
										<td width="25%"><?= $course->after_course;?></td>
										<td width="15%"><?=$course->job_center;?></td>
                                      </tr>
									<?php 
									}
									}
									?>	
                                    </tbody>
                                </table>
                            </div>
                            <!-- /.table-responsive -->
                            
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                </form>
            </div>
        </div>
    </div>
	<div class="clearfix hidden-xs" style="width:100%; height:30px;"></div>
</div>
	<?=$footer;?>
    

