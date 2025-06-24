<?php 
	echo $header;
	echo $topmenu;
?>
<div class="container-contacts">
    <div class="container">
        <div class="page-header" id="contact">
            <h1 class="text-danger text-center">Change password!!!!!!</h1>
        </div>
        <div class="row">
		
            <div class="col-md-12" style="background-color: #fff; padding: 20px; ">
			<?=$alertbox;?>
			<div class="col-md-4">
                <img src="<?= base_url('assets/frontend/images/user_lock.png');?>" class="img-responsive" width=100% height=100%/>
            </div>
			
          <div class="col-md-8" style="background-color: #fff; padding: 20px; ">
		  
			
									<?=form_open_multipart('user/comchangepasswordDB');?>                                      <div class="form-group">
                                        <div class="form-group">
                                            <label> CURRENT PASSWORD</label>
                                            <input class="form-control" name="currentpassword" required type="password" placeholder="Enter Current Password">
                                        </div>
                                        <div class="form-group">
                                            <label>NEW PASSWORD</label>
                                            <input class="form-control" name="newpassword" required type="password" placeholder="Enter New Password">
                                        </div>
										 
                                        <div class="form-group">
                                            <label>CONFIRM NEW PASSWORD</label>
                                            <input class="form-control" name="confirmpassword" required type="password" placeholder="Enter New Password Again">
                                        </div>
                                        <button type="submit" class="btn btn-primary"">Change Password</button>
                                    </form>
										</div>
        </div>
    </div>
    <div class="clearfix hidden-xs" style="width:100%; height:30px;"></div>
</div>
<?=$footer;?>