<?php
echo $header;
echo $topmenu;
?>
<div class="container-contacts">
    <div class="container">
        <div class="page-header" id="contact">
            <h1 class="text-danger text-center">QUESTIONS LIST</h1>
        </div>
        <div class="row">
            <?=$alertbox;?>
        </div>
        <div class="col-lg-12">

            <div class="panel panel-default">
                <div class="panel-heading">
                    <a href="<?=base_url('AddQuestion');?>" class="btn btn-primary">Add New Question</a>
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
                                <th>QUESTION</th>
                                <th>OPTION 1</th>
                                <th>OPTION 2</th>
                                <th>OPTION 3</th>
                                <th>OPTION 4</th>
                                <th>ANSWER</th>
                                <th>IMAGE</th>
                                <th>ACTIONS</th>
                            </tr>
                            </thead>
                            <tbody>
                            <!-- <tr class="odd gradeX"> -->
                            <?php
                            foreach($records as $college){?>
                                <tr class="gradeU">
                                    <td width="20%"><b><?= $college->question;?></b></td>
                                    <td width="10%"><?= $college->option1;?></td>
                                    <td width="10%"><?= $college->option2;?></td>
                                    <td width="10%"><?= $college->option3;?></td>
                                    <td width="10%"><?= $college->option4;?></td>
                                    <td width="10%"><?= $college->answer;?></td>
                                    <td width="10%"><img src="<?=base_url('uploads/')?><?=$college->quest_img;?>" width="99%" height="70"/></td>
                                    <td width="5%" class="center">
                                        
                                        <a href="<?=base_url('user/deletequestions');?>/<?= $college->exam_id;?>" onclick="return confirm('Are you sure to delete ?...')"><li class="fa fa-remove"></li>&nbsp; Delete</a>
                                    </td>
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
