<footer id="subfooter" class="clearfix">
    <div class="container">
        <div class="row">
            <div class="col-md-3">
                <p style="font-size:18px;"><span class="fa fa-birthday-cake text-danger"></span> OCGPU CAREERS</p>
                <p>OCGPU-DISCOVER YOUR CAREER!!!!!!!</p>
                <p>&nbsp;</p>
            </div>
            <div class="col-md-3">
                <p style="font-size:18px;"><span class="fa fa-clock-o text-danger"></span> OPENING HOURS				</p>
                <p>SUN-SAT : 24x7 working</p>
                <p> www.ocgpucareers.com</p>
            </div>
			<div class="col-md-3">
                <p style="font-size:18px;"><span class="fa fa-map-marker text-danger"></span> CONTACTS</p>
                <p>JINCY DEVASIA ,KATTAPPANA</p>
                <p>+91 8089183040</p>
                <p><a href="mailto:mail@example.com">jincychnchudevassia@gmail.com</a></p>
            </div>
            <div class="col-md-3">
                <p style="font-size:18px;"><span class="fa fa-envelope-o text-danger"></span> NEWSLETTER</p>
                <p>
                    <div class="input-group">
                        <input type="text" class="form-control" placeholder="Enter your email..." />
                        <span class="input-group-btn">
                            <button class="btn btn-primary" type="button">Subscribe</button>
                        </span>
                    </div>
                </p>
                <p><br /></p>
                <p>
                    <a class="fa fa-twitter footer-socialicon" target="_blank" href="https://twitter.com/"></a>
                    <a class="fa fa-facebook footer-socialicon" target="_blank" href="https://www.facebook.com/"></a>
                    <a class="fa fa-google-plus footer-socialicon" target="_blank" href="https://plus.google.com/"></a>
                    <a class="fa fa-linkedin footer-socialicon" target="_blank" href="https://plus.google.com/"></a>
                </p>
            </div>
        </div>
    </div>
</footer>

<footer id="footer" class="clearfix">
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                
            </div>
            <div class="col-md-4">
                <p>Created by <a href="#" title="Shield UI">JINCY DEVASIA</a></p>
            </div>
        </div>
    </div>
</footer>
<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header modal-header-primary text-centre">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
				<h3><i class="fa fa-unlock"></i> OCGAPU Login</h3>
			</div>
			<div class="modal-body">
					<div class="container">
						<div class="row">
							<div class="col-sm-6 col-sm-offset-1 col-md-4 col-md-offset-1">
								<div class="account-wall">
									<img class="profile-img" src="<?=base_url('assets/frontend/images/login.png');?>"
										alt="">
									<form class="form-signin" action="<?=base_url('user/loginProcess');?>" method="post">
									<input type="text" class="form-control" name="email" placeholder="Email" required autofocus>
									<input type="password" name="password" class="form-control" placeholder="Password" required>
									<button class="btn btn-lg btn-primary btn-block" type="submit">
										Sign in</button>
									<a href="#" class="pull-right need-help">Need help? </a><span class="clearfix"></span>
									</form>
								</div>
							</div>
						</div>
					</div>							  
				</div>                 
			<div class="modal-footer">
				<span class="center">
					<a href="#" class="text-center new-account">Created by JINCY DEVASIA </a>
				</span>
			</div>
		</div><!-- /.modal-content -->
	</div><!-- /.modal-dialog -->
</div><!-- /.modal -->
<script src="<?= base_url('assets/frontend/js/jquery.min.js');?>"></script>
<script src="<?= base_url('assets/frontend/bootstrap/js/bootstrap.min.js');?>"></script>
<script type="text/javascript" src="<?= base_url('assets/frontend/ext/unitegallery/js/unitegallery.min.js');?>"></script>
<script type="text/javascript" src="<?= base_url('assets/frontend/ext/unitegallery/themes/tiles/ug-theme-tiles.js');?>"></script>

<script type="text/javascript">
    jQuery(function($) {
        $("#gallery").unitegallery({
			gallery_theme: "tiles"
		}); 
    });
</script>
<!-- DataTables JavaScript -->
<script src="<?=base_url('assets/bower_components/datatables/media/js/jquery.dataTables.min.js');?>"></script>
<script src="<?=base_url('assets/bower_components/datatables-plugins/integration/bootstrap/3/dataTables.bootstrap.min.js');?>"></script>
<script src="<?=base_url('assets/bower_components/datatables-responsive/js/dataTables.responsive.js');?>"></script>

<!-- Custom Theme JavaScript -->
<script src=""></script>

<!-- Page-Level Demo Scripts - Tables - Use for reference -->
<script>
    $(document).ready(function() {
        $('#dataTables-example').DataTable({
            responsive: true
        });
    });
</script>


<script src="https://maps.googleapis.com/maps/api/js"></script>

<script type="text/javascript">
    jQuery(function($) {
        
        // Google Maps setup
        var googlemap = new google.maps.Map(
            document.getElementById('googlemap'),
            {
                center: new google.maps.LatLng(44.5403, -78.5463),
                zoom: 8,
                mapTypeId: google.maps.MapTypeId.ROADMAP
            }
        );
    });
</script>
</body>
</html>