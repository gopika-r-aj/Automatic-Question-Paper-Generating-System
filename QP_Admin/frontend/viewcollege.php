<?php 
	echo $header;
	echo $topmenu;
?>
 <div class="container-contacts">
    <div class="container">
        <div class="page-header" id="contact">
            <h1 class="text-danger text-center">VIEW COLLEGE</h1>
        </div>
        <div class="row">
            <?=$alertbox;?>
        </div>
                    <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            COLLEGE DETAILS
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
                                        <th>LOGO</th>
                                        <th>NAME</th>
                                        <th>ADDRESS</th>
                                        <th>CONTACT</th>
                                        <th>EMAIL</th>
                                        <th>WEBSITE</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <!-- <tr class="odd gradeX"> -->
                                    <?php
                                    foreach($records as $college){?>
                                        <tr class="gradeU">
                                            <td width="15%"><img src="<?=base_url('uploads/')?><?=$college->college_logo;?>" width="99%" height="70"/></td>
                                            <td width="20%"><b><?= $college->college_name;?></b></td>
                                            <td width="35%"><?= $college->college_address;?></td>
                                            <td width="10%"><?= $college->college_contact;?></td>
                                            <td width="10%"><?= $college->college_email;?></td>
                                            <td width="5%"><a href="<?=$college->college_website;?>"target="_blank"><li class="fa fa-globe"></li>&nbsp; Visit</a></td>
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
	