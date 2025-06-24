<?php
echo $header;
echo $topmenu;
?>
<div class="container-contacts">
    <div class="container">
        <div class="page-header" id="contact">
            <h1 class="text-danger text-center">EXAM RESULTS</h1>
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
                                        <th>POSITION</th>
                                        <th>JOBSEEKER</th>
                                        <th>JOB</th>
                                        <th>EXAM MARK</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <?php
                                    $a=1;
                                    foreach($records as $college){
                                        ?>
                                        <tr class="odd gradeX">
                                            <td><?=$a;?></td>
                                            <td><?=$college->js_name;?></td>
                                            <td><?=$college->job_post;?></td>
                                            <td><?=$college->mark;?></td>
                                        </tr>
                                        <?php
                                        $a++;
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
