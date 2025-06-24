<?php 
	echo $header;
	echo $topmenu;
?>
<div class="container-contacts">
    <div class="container">
        <div class="page-header" id="contact">
            <h1 class="text-danger text-center">ADD EXAM QUESTIONS</h1>
        </div>
        <div class="row">	  
          <div class="col-md-12" style="background-color: #fff; padding: 20px;">
		   <?=$alertbox;?>		  
           <div class="col-md-6" style="background-color: #fff; padding: 20px;">
			  <?=form_open_multipart('user/addexamDB');?>		   
              <form>
				<div class="form-group">
					<label for="form-message">JOB</label>
					  <select name="jobs" class="form-control" >
                          <?php foreach($job as $value){?>
                              <option value="<?=$value->job_id;?>"><?=$value->job_post;?></option>
                          <?php }?>
					</select>
			   </div>
                    <div class="form-group">
                        <label for="form-message">QUESTION</label>
                      <textarea class="form-control" required id="form-message" name="ques" placeholder="Eg: In which Country winter Olympics 2014 will be held?"></textarea>
                    </div>
                    <div class="form-group">
                        <label for="form-name">OPTION1</label>
                      <input type="text" name="opt1"class="form-control" required placeholder="Eg: America">
                    </div>
                
                    <div class="form-group">
                        <label for="form-name">OPTION2</label>
                      <input type="text" name="opt2"class="form-control" required  placeholder="Eg: Russia">
                    </div>
                   
                    </div>
                     <div class="col-md-6" style="background-color: #fff; padding: 20px;">
                      <div class="form-group">
                        <label for="form-name">OPTION3</label>
                      <input type="text" name="opt3"class="form-control" required  placeholder="Eg: Germany">
                    </div>
                   <div class="form-group">
                        <label for="form-name">OPTION4</label>
                      <input type="text" name="opt4"class="form-control" required  placeholder="Eg: England">
                    </div>
                    <div class="form-group">
                        <label for="form-message">QUESTION IMAGE</label>
                        <input name="file_name"  type="file" />
						<h6>Not Mandatory</h6>
                    </div>
                <div class="form-group">
                        <label for="form-name">ANSWER</label>
                        <select name="ans" class="form-control" required placeholder="Ans: Russia" >
						        <option value="">Choose your option</option>
                                <option value="option1">Option 1</option>
                                <option value="option2">Option 2</option>
                                <option value="option3">Option 3</option>
                                <option value="option4">Option 4</option>
                        </select>
                    </div>
                   
                    <button type="submit" class="btn btn-primary">ADD QUESTIONS</button>
                </form>
            </div>
        </div>
    </div>
    <div class="clearfix hidden-xs" style="width:100%; height:30px;"></div>
</div>
<?=$footer;?>