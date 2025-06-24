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
                                <li class="active"><a href="<?= base_url('user/companyprofile/Profile/infoprofile/Profile/info');?>" class="smooth-scroll" title="HOME"><i class="fa fa-home fa-2x"></i></a></li>
                        <li><a href="<?= base_url('addjob');?>">ADD JOBS</a></li>
						<li><a href="<?= base_url('ViewCOMJobs');?>">VIEW JOBS</a></li>
						<li><a href="<?= base_url('addexam');?>">ADD EXAM QUESTIONS</a></li>
                         <li><a href="<?= base_url('ResultsCompany');?>">EXAM RESULT</a></li>
						 
                <li class="dropdown"><a href="#" class="dropdown-toggle " data-toggle="dropdown" data-hover="dropdown" data-delay="0" data-close-others="false"><i class="fa fa-gear"></i> SETTINGS <i class="fa fa-angle-down"></i></a>
                    <ul class="dropdown-menu">
                        <li><a href="<?= base_url('user/companyprofile/profile/info');?>"><i class="fa fa-user"></i> PROFILE</a></li>
                        <li><a href="<?= base_url('user/comchangepassword/changepass/info');?>"><i class="fa fa-gear"></i>CHANGE PASSWORD</a></li>
						<li><a href="<?= base_url('user/logout');?>"><i class="fa fa-lock"></i> LOGOUT</a></li>
                    </ul>
                </li>
            </ul>
        </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
</nav>