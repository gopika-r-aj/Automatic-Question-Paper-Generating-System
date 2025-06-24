<?=$header.$topmenu;?>
<div class="container-contacts">
    <div class="container">
    <div id="page-wrapper">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="text-danger text-center">VIEW COMPANY DETAILS</h1>
            </div>
            <!-- /.col-lg-12 -->
        </div>
        <!-- /.row -->
        <form>
            <div class="row">
                <?=$alertbox;?>
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            COMPANY DETAILS
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
                                        <th>COMPANY LOGO</th>
                                        <th>COMPANY NAME</th>
                                        <th>COMPANY ADDRESS</th>
                                        <th>CONTACT NUMBER</th>
                                        <th>EMAIL ADDRESS</th>
                                        <th>COMPANY WEBSITE</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <?php
                                    foreach($records as $value){?>
                                    <tr class="odd gradeX">
                                        <td width="15%"><img src="<?=base_url('uploads/')?><?=$value->comp_logo;?>" width="99%" height="70"/></td>
                                        <td><?=$value->comp_name;?></td>
                                        <td><?=$value->comp_address;?></td>
                                        <td><?=$value->comp_contact_num;?></td>
                                        <td><?=$value->comp_email;?></td>
                                        <td width="5%"><a href="<?=$value->comp_website;?>" target="_blank"><li class="fa fa-globe"></li>&nbsp; Visit</a></td>
                                    </tr>
                                    </tbody>
                                    <?php
                                    }
                                    }
                                    ?>
                                </table>
                            </div>
                            <!-- /.table-responsive -->
        </form>
    <!-- /.panel-body -->
    </div>
    <!-- /.panel -->
    </div>
    <!-- /.col-lg-12 -->
    </div>
    <!-- /.row -->
    <div class="row">
        <div class="col-lg-6"><!-- /.panel -->
        </div>
        <!-- /.col-lg-6 --><!-- /.col-lg-6 -->
    </div>
    <!-- /.row -->
    <div class="row"><!-- /.col-lg-6 --><!-- /.col-lg-6 -->
    </div>
    <!-- /.row -->
    <div class="row"><!-- /.col-lg-6 -->
        <!-- /.col-lg-6 -->
    </div>
    <!-- /.row -->
    </div>
    <!-- /#page-wrapper -->
	</div>
	</div>
<?=$footer;?>