<div class="container-contacts">
    <div class="container">
        <div class="page-header" id="contact">
            <h1 class="text-danger text-center">COMPANY PROFILE</h1>
        </div>
        <div class="row">
          <div class="col-md-12" style="background-color: #fff; padding: 20px;">
          <?=$alertbox;?>
          <div class="col-md-4" style="background-color: #fff; padding: 20px;">
               <form>
                  <img src="<?php echo base_url('uploads/'); ?><?=$comp_logo;?>" class="img-thumbnail" alt="Cinque Terre" width="280" height="280">
                    
					</div>
				
                    <div class="col-md-7" style="background-color: #fff; padding: 20px;"><div class="form-group">
                        <label for="form-name">COMPANY NAME :</label>
                         <label style="color:#000;" for="form-name"><?=$comp_name;?></label>
                    </div>
					
                    
                    <div class="form-group">
                        <label for="form-message">COMPANY ADDRESS :</label>
                      <label style="color:#000;" for="form-name"><?=$comp_address;?></label>
                         
                      
                    </div>
					
                    
                    <div class="form-group">
                        <label for="form-name">COMPANY CONTACT NUMBER :</label>
                      <label style="color:#000;" for="form-name"><?=$comp_contact_num;?></label>
                    </div>
                    
                    
                    <div class="form-group">
                        <label for="form-email">COMPANY EMAIL ADDRESS :</label>
                         <label style="color:#000;" for="form-name"><?=$comp_email;?></label>
                    </div>
                     
                    <div class="form-group">
                        <label for="form-subject">COMPANY WEBSITE</label>
                        <label style="color:#000;" for="form-name"><?=$comp_website;?></label>
                    </div>
                    
                </form>
            </div>
        </div>
    </div>
    <div class="clearfix hidden-xs" style="width:100%; height:30px;"></div>
</div>
