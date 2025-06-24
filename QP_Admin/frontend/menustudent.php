<!-- Navbar -->
<nav class="navbar navbar-default navbar-fixed-top">
    <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a href="<?= base_url('user/index');?>" title="Career Guidence Program">
                <img class="img-responsive" src="<?= base_url('assets/frontend/images/logo.png');?>" alt="My Restaurant Bootstrap Theme"/>
            </a>
        </div>
        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav navbar-right">
                <?php
                    $data=$this->session->userdata();
                    $id=$data['id'];
                    $data['m']="Student Profile";
                    $data['c']="info";
                ?>
                <li class="active"><a href="<?= base_url('user/studentprofile/Profile/info');?>" class="smooth-scroll" title="HOME"><i class="fa fa-home fa-2x"></i></a></li>
                <li><a href="<?= base_url('viewcollege');?>"><h5>VIEW COLLEGE</h5></a></li>
                <li><a href="<?= base_url('viewcourse');?>"><h5>VIEW COURSE</h5></a></li>
                <li><a href="<?= base_url('viewcollegecourse');?>"><h5>VIEW COLLEGE COURSE</h5></a></li>
                <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-delay="0" data-close-others="false" title="ACCOUNT SETTINGS"><i class="fa fa-gear fa-2x"></i></i></a>
                    <ul class="dropdown-menu">
                        <li><a href="<?= base_url('user/studentprofile/Profile/info');?>"><i class="fa fa-user"></i> PROFILE</a></li>
                        <li><a href="<?= base_url('user/stuchangepassword/changepass/info');?>"><i class="fa fa-gear"></i>CHANGE PASSWORD</a></li>
						<li><a href="<?= base_url('user/logout');?>"><i class="fa fa-lock"></i> LOGOUT</a></li>
                    </ul>
                </li>
            </ul>
        </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
</nav>