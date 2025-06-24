<div class="container-contacts">
    <div class="container">
        <div class="page-header" id="contact">
            <h1 class="text-danger text-center">JOBSEEKER PROFILE</h1>
        </div>
        <div class="row">

            <div class="col-md-12" style="background-color: #fff; padding: 20px; ">
                <?=$alertbox;?>
                <div class="col-md-6" style="background-color: #fff; padding: 20px; ">
                    <form>
                        <img src="<?php echo base_url('uploads/'); ?><?=$js_photo;?>" class="img-thumbnail" alt="Cinque Terre" width="200" height="275">
                        <div class="form-group">
                            <label for="form-name">JOBSEEKER NAME :</label>
                           <label style="color:#000;" for="form-name"><?=$js_name;?></label>
                        </div>
                        <div class="form-group">
                            <label for="form-message">GENDER :</label>
							 <label style="color:#000;" for="form-name"><?=$js_gender;?></label>
                    </div>
                            
						<script>
						 $("#dob").click(function(){
                 
            $(this).prop('type', 'date');

      });
						</script>
						
						
						 </div>
                <div class="col-md-6" style="background-color: #fff; padding: 20px;">
						
                        <div class="form-group">
                            <label for="form-name">DATE OF BIRTH : </label>
							<label style="color:#000;" for="form-name"><?=$js_dob;?></label>
							<br>
							
                        </div>
                        <div class="form-group">
                            <label for="form-name">CONTACT NUMBER :</label>
                            <label style="color:#000;" for="form-name"><?=$js_phone;?></label>
                        </div>
               
                        <div class="form-group">
                            <label for="form-message">JOBSEEKER ADDRESS :</label>
                             <label style="color:#000;" for="form-name"><?=$js_address;?></label>
                                                          
                        </div>				
				
                    <div class="form-group">
                        <label for="form-email">JOBSEEKER EMAIL ADDRESS :</label>
                         <label style="color:#000;" for="form-name"><?=$js_email;?></label>
                    </div>

                    <div class="form-group">
                        <label for="form-message">JOBSEEKER HOBBIES :</label>
                         <label style="color:#000;" for="form-name"><?=$js_hobbies;?></label>
                           
                        
                    </div>

                    <div class="form-group">
                        <label for="form-message">JOBSEEKER EDUCATION :</label>
                      <label style="color:#000;" for="form-name"><?=$js_education;?></label>
                           
                    </div>
                    <div class="form-group">
                        <label for="form-message">PREFERED JOBS :</label>
                        <label style="color:#000;" for="form-name"><?=$js_prefjob;?></label>
                    </div>
                    
                    </form>
                </div>

            </div>
        </div>
        <div class="clearfix hidden-xs" style="width:100%; height:30px;"></div>
    </div>