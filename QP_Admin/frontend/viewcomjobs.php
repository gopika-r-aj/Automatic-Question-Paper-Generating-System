<?php
    echo $header;
    echo $topmenu;
?>
<div class="container-contacts">
    <div class="container">
        <div class="page-header" id="contact">
            <h1 class="text-danger text-center">VIEW JOBS</h1>
        </div>
        <div class="row">
            <div class="col-md-12" style="background-color: #fff; padding: 20px;">
                <?=$alertbox;?>
                    <div class="col-lg-12">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                RESULTS
                            </div>
                            <?php
                            if(empty($records))
                            {
                                echo '<center><span class="fa fa-trash fa-5x"></span></center>';
                                echo '<center><h2>No data available in this list now</h2></center>';
                            }
                            else
                            {
                            ?>
                            <!-- /.panel-heading -->
                            <div class="panel-body">
                                <div class="dataTable_wrapper">
                                    <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                                        <thead>
                                        <tr>
                                            <th>COMPANY</th>
                                            <th>JOB POST</th>
                                            <th>JOB SALARY</th>
                                            <th>JOB LOCATION</th>
                                            <th>JOB SKILLS</th>
                                            <th>OPENING DATE</th>
                                            <th>CLOSING DATE</th>
                                            <th>MORE ABOUT JOB</th>
											<th>ACTION</th>
                                           
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <?php
                                        foreach($records as $college){
                                            $cid=$college->comp_id;
                                            $jid=$college->job_id;
                                        ?>
                                        <tr class="odd gradeX">
                                            <td><?=$college->comp_name;?></td>
                                            <td><?=$college->job_post;?></td>
                                            <td><?=$college->job_salary;?></td>
                                            <td><?=$college->job_location;?></td>
                                            <td><?=$college->job_skills;?></td>
                                            <td><?=$college->job_opdate;?></td>
                                            <td><?=$college->job_cldate;?></td>
                                            <td><?=$college->job_more;?></td>
                                            <td><a href="<?=base_url('user/deletecomjobs');?>/<?= $college->job_id;?>"><li class="fa fa-remove"></li>&nbsp; Delete</a></td>
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
