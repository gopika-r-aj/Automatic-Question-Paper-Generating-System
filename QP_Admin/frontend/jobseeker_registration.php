<?php 
	echo $header;
	echo $topmenu;
?>
<div class="container-contacts">
    <div class="container">
        <div class="page-header" id="contact">
            <h1 class="text-danger text-center">JOBSEEKER REGISTRATION</h1>
        </div>
        <div class="row">
        
          <div class="col-md-12" style="background-color: #fff; padding: 20px; ">	  
			<?=$alertbox;?>
			<H5 style="color:red;">Note: Registration is not a citeria to applying  a Job, You should appear online examination conducted by the companies while applying.</H5>	
			<div class="col-md-6" style="background-color: #fff; padding: 20px; ">
			  <?=form_open_multipart('user/registerjobseekerDB');/* form_open_multipart('admin/do_upload') */;?>
                       <div class="form-group">
                        <label for="form-name">JOBSEEKER NAME</label>
                        <input type="text" name="jsname" required="required" pattern="^[a-zA-Z_ ]*$" title="Only allowed char a-z or A-Z" oninput="if (typeof this.reportValidity === 'function') {this.reportValidity();}"  class="form-control" id="form-name" placeholder="eg:Tomin Thomas">
                    </div>
                    <div class="form-group">
                        <label for="form-message">GENDER</label><br>
                        <input type="radio" required="required" name="gender" value="Male"> Male<br>
					    <input type="radio" required="required" name="gender" value="Female"> Female
                    </div>
                    <div class="form-group">
                        <label for="form-name">DATE OF BIRTH</label>
                      <input type="date" name="dob" required="required"  class="form-control" id="form-name" placeholder="eg:12/08/1990">
                    </div>
                   <div class="form-group">
                        <label for="form-message">JOBSEEKER ADDRESS</label>
                      <textarea class="form-control" required="required" id="form-message" name="jsaddress" placeholder="eg:kottayam,mundakkayam"></textarea>
                    </div>
                     <div class="form-group">
                        <label for="form-name">JOBSEEKER CONTACT NUMBER</label>
                        <input type="text" name="sjscnum" required="required"  pattern="^((0091)|(\+91)|0?)[789]{1}\d{9}$" required="required"pattern="/(6|7|8|9)\d{9}/" title="Only 10 digits are allowed must be start with 6,7,8,9 " oninput="if (typeof this.reportValidity === 'function') {this.reportValidity();}"  class="form-control" id="form-name" placeholder="Eg: +918089183040">
                    </div>
                    <div class="form-group">
                        <label for="form-email">JOBSEEKER EMAIL ADDRESS</label> 
                        <input type="email" name="jsemail"  class="form-control" id="form-email" pattern="(\W|^)[\w.+\-]*@gmail\.com(\W|$)" title="Please enter a Valid Email" oninput="if (typeof this.reportValidity === 'function') {this.reportValidity();}"   placeholder="eg:tomin@gmail.com">
                    </div>
					 </div>
                     <div class="col-md-6" style="background-color: #fff; padding: 20px; ">
                     <div class="form-group">
                        <label for="form-message">JOBSEEKER HOBBIES</label>
                      <textarea class="form-control" id="form-message" name="jshobbies" required="required" placeholder="eg:reading"></textarea>
                    </div>
                     <div class="form-group">
                        <label for="form-message">JOBSEEKER EDUCATION</label>
                      <textarea class="form-control" id="form-message" name="education" required="required" placeholder="eg:MCA"></textarea>
                    </div>   
                     <div class="form-group">
                        <label for="form-message">PREFERED JOBS</label><br>
						<select  name="prefjoblocation">
	
						  <option value="kerala">kerala</option>
						  <option value="tamilnadu">tamilnaadub</option>
						  <option value="goa">goa</option>
						  <option value="karnadaka">karnaadaka</option>
						</select>
                    </div>    
                    <div class="form-group">
                        <label for="form-message">STUDENT PHOTO</label>
                        <input name="file_name" type="file" required="required" />
                    </div>	
                     <div class="form-group">
                        <label for="form-name">PASSWORD</label>
                        <input type="password" name="pwd"   class="form-control" id="form-name" required="required"pattern="(?=^.{8,}$)((?=.*\d)|(?=.*\W+))(?![.\n])(?=.*[A-Z])(?=.*[a-z]).*$" title="You must enter at least 8 characters including digit letter upper case and lower case" oninput="if (typeof this.reportValidity === 'function') {this.reportValidity();}"  placeholder=" eg:12345678">
                    </div>
                     <div class="form-group">
                        <label for="form-name">CONFIRM PASSWORD</label>
                        <input type="password" name="cpwd"   class="form-control" id="form-name" required="required" placeholder=" eg:12345678">
                    </div>
                    <button type="submit" class="btn btn-primary">JOBSEEKER REGISTER</button>
                </form>
            </div>
           
        </div>
    </div>
    <div class="clearfix hidden-xs" style="width:100%; height:30px;"></div>
</div>
<?=$footer;?>