<?php 
	echo $header;
	echo $topmenu;
?>
<div class="container-contacts">
    <div class="container">
        <div class="page-header" id="contact">
            <h1 class="text-danger text-center">Contact us</h1>
        </div>
        <div class="row">
            <div class="col-md-6">
                <div id="googlemap"></div>
            </div>
			
            <div class="col-md-6" style="background-color: #fff; padding: 20px;">
			<?=$alertbox;?>
                
				 <?=form_open_multipart('user/contactDB');?> 
                    <div class="form-group">
                        <label for="form-name">Name</label>
                        <input type="text" name="name" class="form-control" id="form-name" placeholder="eg:SREEJITH" required="required">
                    </div>
                    <div class="form-group">
                        <label for="form-email">Email Address</label>
                        <input type="email" name="email" class="form-control" id="form-email" placeholder="Email Address" required="required">
                    </div>
                    <div class="form-group">
                        <label for="form-subject">Subject</label>
                        <input type="text" name="subj" class="form-control" id="form-subject" placeholder="Subject" required="required">
                    </div>
                    <div class="form-group">
                        <label for="form-message">Message</label>
                        <textarea name="message" class="form-control" id="form-message" placeholder="Message" required="required"></textarea>
                    </div>
                       <button type="submit" class="btn btn-primary"">Send Message</button>
                </form>
            </div>
        </div>
    </div>
    <div class="clearfix hidden-xs" style="width:100%; height:30px;"></div>
</div>
<?=$footer;?>