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
				<li class="active"><a href="<?= base_url('user/index');?>" class="smooth-scroll">HOME</a></li>
				<li><a href="<?= base_url('user/about');?>">ABOUT</a></li>
				<li><a href="<?= base_url('user/services');?>">SERVICES</a></li>
				<li><a href="<?= base_url('user/gallery');?>">GALLERY</a></li>
				<li><a href="<?= base_url('user/contact/Send Enquiries/info');?>">CONTACT</a></li>
                <li class="dropdown"><a href="#" class="dropdown-toggle " data-toggle="dropdown" data-hover="dropdown" data-delay="0" data-close-others="false">REGISTRATION <i class="fa fa-angle-down"></i></a>
					<ul class="dropdown-menu">
						
						<li><a href="<?= base_url('user/jobseekerregistration/Registration/info');?>">JOBSEEKER REGISTRATION</a></li>
						<li><a href="<?= base_url('user/studentregistration/Registration/info');?>">STUDENT REGISTRATION</a></li>
						<li><a href="<?= base_url('user/companyregistration/Registration/info');?>">COMPANY REGISTRATION</a></li>
						
											
					</ul>
				</li>	
                <li><a href="#" data-toggle="modal" data-title="This is my title" data-caption="Login" data-image="" data-target="#myModal"><i class="fa fa-lock"></i> LOGIN</a></li>				
			</ul>
		</div><!-- /.navbar-collapse -->
	</div><!-- /.container-fluid -->
</nav>