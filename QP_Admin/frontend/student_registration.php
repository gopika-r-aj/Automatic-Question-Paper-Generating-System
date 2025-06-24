<?php 
	echo $header;
	echo $topmenu;
?>
<div class="container-contacts">
    <div class="container">
        <div class="page-header" id="contact">
            <h1 class="text-danger text-center">STUDENT REGISTRATION</h1>
        </div>
        <div class="row">
          <div class="col-md-12" style="background-color: #fff; padding: 20px;">
			<?=$alertbox;?>
			<div class="col-md-6" style="background-color: #fff; padding: 20px; ">
			  <?=form_open_multipart('user/registerstudentDB');/* form_open_multipart('admin/do_upload') */;?>
                    <div class="form-group">
                        <label for="form-name">STUDENT NAME</label>
                        <input type="text" name="sname" required="required" class="form-control" id="form-name" pattern="^[a-zA-Z_ ]*$" title="Only allowed char a-z or A-Z" oninput="if (typeof this.reportValidity === 'function') {this.reportValidity();}" placeholder="Eg.Abin Jacob">
                    </div>
                    <div class="form-group">
                        <label for="form-message">GENDER</label><br>
						<input type="radio" name="gender" required="required" value="Male"> Male<br>
						<input type="radio" name="gender" required="required" value="Female"> Female
                    </div>
                    <div class="form-group">
                        <label for="form-name">DATE OF BIRTH</label>
                      <input type="date" name="dob" required="required"  class="form-control" id="form-name" placeholder="DOB">
                    </div>
                    <div class="form-group">
                        <label for="form-message">STUDENT ADDRESS</label>
                      <textarea class="form-control" required="required" id="form-message" name="saddress" placeholder="kottayam"></textarea>
                    </div>
                     <div class="form-group">
                        <label for="form-name">STUDENT CONTACT NUMBER</label>
                        <input type="text" name="scnum" required="required" class="form-control" id="form-name" pattern="^((0091)|(\+91)|0?)[789]{1}\d{9}$" required="required"pattern="/(6|7|8|9)\d{9}/" title="Only 10 digits are allowed must be start with 6,7,8,9 " oninput="if (typeof this.reportValidity === 'function') {this.reportValidity();}" placeholder="+919595959595">
                    </div>
                    <div class="form-group">
                        <label for="form-email">STUDENT EMAIL ADDRESS</label>
                        <input type="email" name="semail" required="required" class="form-control" id="form-email" pattern="(\W|^)[\w.+\-]*@gmail\.com(\W|$)" title="Please enter a Valid Email" oninput="if (typeof this.reportValidity === 'function') {this.reportValidity();}"  placeholder="eg:abin@gmail.com">
                    </div>
					</div>
                     <div class="col-md-6" style="background-color: #fff; padding: 20px; ">
                     <div class="form-group">
                        <label for="form-message">STUDENT HOBBIES</label>
						<textarea class="form-control" required="required" id="form-message" name="shobbies" placeholder="eg:reading"></textarea>
                    </div>
					
                     <div class="form-group">
                      <label for="form-message">STUDENT EDUCATION</label>
                      <textarea class="form-control" id="form-message" name="education" required="required" placeholder="eg:BSC MATHS"></textarea>
                    </div>   
                     <div class="form-group">
                        <label for="form-message">STUDENT AIM</label>
						<textarea class="form-control" required="required" id="form-message" name="aim" placeholder="eg:DOCTOR"></textarea>
                    </div> 
                    <div class="form-group">
                        <label for="form-message">STUDENT PHOTO</label>
                        <input name="file_name" type="file" required="required" />
                    </div>					
                     <div class="form-group">
                        <label for="form-name">PASSWORD</label>
                        <input type="password" name="pwd" required class="form-control" id="form-name"pattern="(?=^.{8,}$)((?=.*\d)|(?=.*\W+))(?![.\n])(?=.*[A-Z])(?=.*[a-z]).*$" title="You must enter at least 8 characters including digit letter upper case and lower case" oninput="if (typeof this.reportValidity === 'function') {this.reportValidity();}"  placeholder=" enter a password">
                    </div>
                     <div class="form-group">
                        <label for="form-name">CONFIRM PASSWORD</label>
                        <input type="password" name="cpwd" required class="form-control" id="form-name"pattern="(?=^.{8,}$)((?=.*\d)|(?=.*\W+))(?![.\n])(?=.*[A-Z])(?=.*[a-z]).*$" title="You must enter at least 8 characters including digit letter upper case and lower case" oninput="if (typeof this.reportValidity === 'function') {this.reportValidity();}"  placeholder=" enter the password">
                    </div>
                    <button type="submit" class="btn btn-primary">STUDENT REGISTER</button>
                </form>
            </div>
        </div>
    </div>
    <div class="clearfix hidden-xs" style="width:100%; height:30px;"></div>
</div>
<?=$footer;?>