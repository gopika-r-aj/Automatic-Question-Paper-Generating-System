<?php 
	echo $header;
	echo $topmenu;
?>
<div class="container-contacts">
    <div class="container">
        <div class="page-header" id="contact">
            <h1 class="text-danger text-center">COMPANY REGISTRATION</h1>
        </div>
        <div class="row">
          <div class="col-md-12" style="background-color: #fff; padding: 20px;"> 
		  	  <?=$alertbox;?>
			  <div class="col-md-6" style="background-color: #fff; padding: 20px; ">
			  <?=form_open_multipart('user/registercompanyDB');?>
                    <div class="form-group">
                        <label for="form-name">COMPANY NAME</label>
                        <input type="text" name="company_name" required="required"  class="form-control" id="form-name"pattern="^[a-zA-Z_ ]*$" title="Only allowed char a-z or A-Z" oninput="if (typeof this.reportValidity === 'function') {this.reportValidity();}" placeholder="eg:wipro">
                    </div>
                    <div class="form-group">
                        <label for="form-message">COMPANY ADDRESS</label>
                      <textarea class="form-control" id="form-message" required="required" name="company_address" placeholder="eg:wipro technologies"></textarea>
                    </div>
                    <div class="form-group">
                        <label for="form-name">COMPANY CONTACT NUMBER</label>
                      <input type="text"  name="company_number" required="required"  class="form-control" id="form-name"pattern="^((0091)|(\+91)|0?)[789]{1}\d{9}$" required="required"pattern="/(6|7|8|9)\d{9}/" title="Only 10 digits are allowed must be start with 6,7,8,9 " oninput="if (typeof this.reportValidity === 'function') {this.reportValidity();}" placeholder="+919898989898">
                    </div>
                    <div class="form-group">
                        <label for="form-email">COMPANY EMAIL ADDRESS</label>
                        <input type="email" name="company_email" required="required" class="form-control" id="form-email"pattern="(\W|^)[\w.+\-]*@gmail\.com(\W|$)" title="Please enter a Valid Email" oninput="if (typeof this.reportValidity === 'function') {this.reportValidity();}"  placeholder="eg:wipro@gmail.com">
                    </div>
					 </div>
                     <div class="col-md-6" style="background-color: #fff; padding: 20px; ">
                    <div class="form-group">
                        <label for="form-subject">COMPANY WEBSITE</label>
                        <input type="text"  name="website_address" class="form-control" id="form-subject" pattern="(http|https)?://.+" required="required" placeholder="eg:www.wipro.com">
                    </div>
                    <div class="form-group">
                        <label for="form-message">COMPANY LOGO</label>
                        <input name="file_name" type="file" required="required" />
                    </div>
                    <div class="form-group">
                        <label for="form-name">PASSWORD</label>
                        <input type="password" name="pswd" required="required" class="form-control" id="form-name"pattern="(?=^.{8,}$)((?=.*\d)|(?=.*\W+))(?![.\n])(?=.*[A-Z])(?=.*[a-z]).*$" title="You must enter at least 8 characters including digit letter upper case and lower case" oninput="if (typeof this.reportValidity === 'function') {this.reportValidity();}"  placeholder="eg:wipro123">
                    </div>
                     <div class="form-group">
                        <label for="form-name">CONFIRM PASSWORD</label>
                        <input type="password" name="cpswd" required="required"  class="form-control" id="form-name" "pattern="(?=^.{8,}$)((?=.*\d)|(?=.*\W+))(?![.\n])(?=.*[A-Z])(?=.*[a-z]).*$" title="You must enter at least 8 characters including digit letter upper case and lower case"placeholder="eg:wipro123">
                    </div>
                    <button type="submit" class="btn btn-primary">COMPANY REGISTER</button>
                </form>
            </div>
        </div>
    </div>
    <div class="clearfix hidden-xs" style="width:100%; height:30px;"></div>
</div>
<?=$footer;?>