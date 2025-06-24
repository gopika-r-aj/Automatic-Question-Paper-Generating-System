<div class="container-contacts">
    <div class="container">
        <div class="page-header" id="contact">
            <h1 class="text-danger text-center">MY PROFILE</h1>
        </div>
        <div class="row">
            <div class="col-md-12" style="background-color: #fff; padding: 20px;">
                <?=$alertbox?>
                <div class="col-md-4" style="background-color: #fff; padding: 20px;">
                    <form>
                        <img src="<?php echo base_url('uploads/'); ?><?=$stud_photo;?>" class="img-thumbnail" alt="Cinque Terre" width="280" height="280">
                        
						</div>
                        <div class="col-md-7" style="background-color: #fff; padding: 20px;">
						<div class="form-group">
                            <label for="form-name">STUDENT NAME :</label>
                            <label style="color:#000;" for="form-name"><?=$stud_name;?></label>
                        </div>

                        <div class="form-group">
                            <label for="form-message">GENDER :</label>
							<label style="color:#000;" for="form-name"><?=$stud_gender;?></label>
                        </div>
						<div class="form-group">
                            <label for="form-name">DATE OF BIRTH : </label>
							<label style="color:#000;" for="form-name"><?=$stud_dob;?></label>
							
                        </div>			
                        <div class="form-group">
                            <label for="form-name">STUDENT CONTACT NUMBER :</label>
                            <label style="color:#000;" for="form-name"><?=$stud_phone;?></label>
                        </div>
						
						<div class="form-group">
                            <label for="form-message">STUDENT ADDRESS :</label>
                            <label style="color:#000;" for="form-name"><?=$stud_address;?></label>
                        </div>
						
                        <div class="form-group">
                            <label for="form-email">STUDENT EMAIL ADDRESS :</label>
                            <label style="color:#000;" for="form-name"><?=$stud_email;?></label>
                        </div>
                
                   
                    <div class="form-group">
                        <label for="form-message">STUDENT HOBBIES :</label>
                        <label style="color:#000;" for="form-name"><?=$stud_hobbies;?></label>
                    </div>

                    <div class="form-group">
                        <label for="form-message">STUDENT EDUCATION :</label>
                       <label style="color:#000;" for="form-name"><?=$stud_education;?></label>
                    </div>
                    <div class="form-group">
                        <label for="form-message">STUDENT AIM :</label>
                        <label style="color:#000;" for="form-name"><?=$stud_aim;?></label>
                    </div>
                   
                    </form>
                </div>
            </div>
        </div>
        <div class="clearfix hidden-xs" style="width:100%; height:30px;"></div>
    </div>
