<?php 
	echo $header;
	echo $topmenu;
?>
<div class="container-contacts">
    <div class="container">
        <div class="page-header" id="contact">
            <h1 class="text-danger text-center">ADD JOBS</h1>
        </div>
        <div class="row">
          <div class="col-md-12" style="background-color: #fff; padding: 20px;">
		  <?=$alertbox;?>
           <div class="col-md-6" style="background-color: #fff; padding: 20px;">
              <?=form_open_multipart('user/addjobDB');?>
                    <div class="form-group">
                        <label for="form-name">JOB POST</label>
                        <input type="text" name="post" class="form-control" id="form-name" required="required" placeholder="eg:ENGINEER">
                    </div>
                    <div class="form-group">
                        <label for="form-name">JOB SALARY</label>
                      <input type="text" name="salary"class="form-control" id="form-name" required="required" placeholder="25000/-">
                    </div>
                <div class="form-group">
                      <label for="form-message">JOB LOCATION</label>
                      <textarea class="form-control" id="form-message" name="location" required="required" placeholder="eg:mumbai"></textarea>
                    </div>
                    <div class="form-group">
                        <label for="form-message">JOB SKILLS</label>
                      <textarea class="form-control" id="form-message" name="skills" required="required" placeholder="eg:hardworker,php skills"></textarea>
                    </div>
                    </div>
                     <div class="col-md-6" style="background-color: #fff; padding: 20px;">
                    
                
                 <div class="form-group">
                  <label for="form-name">OPENING DATE</label>
                      <input type="date" name="opdate" class="form-control" id="form-name" required="required" placeholder="opening date">
                </div>
                   <div class="form-group">
                  <label for="form-name">CLOSING DATE</label>
                      <input type="date" name="cldate" class="form-control" id="form-name" required="required" placeholder="closing date">
                </div>
                <div class="form-group">
                        <label for="form-message">MORE ABOUT JOB</label>
                      <textarea class="form-control" id="form-message" name="more" required="required" placeholder="eg:nice job lot of openings"></textarea>
                    </div>
                   
                    <button type="submit" class="btn btn-primary">ADD JOB</button>
                </form>
            </div>
        </div>
    </div>
    <div class="clearfix hidden-xs" style="width:100%; height:30px;"></div>
</div>
<?=$footer;?>
