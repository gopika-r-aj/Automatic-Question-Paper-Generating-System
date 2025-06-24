<?php
echo $header;
echo $topmenu;
?>
    <div class="container-contacts">
    <div class="container">
        <div class="page-header" id="contact">
            <h1 class="text-danger text-center">ONLINE EXAM</h1>
        </div>
        <div class="row">
            <div class="col-md-12" style="background-color: #fff; padding: 20px;">
                <?php if(!$job)
                {
                $baseURL=base_url('ViewJobs');
                echo'<centre><a href="'.$baseURL.'" class="col-lg-12 btn btn-info">Currently no exam posted by the recruter.</a></centre>';
                }
                else{?>
                <div class="col-md-6" style="background-color: #fff; padding: 20px;">
                    <?=form_open_multipart('user/attendexamDB');?>
                    <form>
                        <?php $a=1; foreach($job as $value){?>
                        <input type="hidden" name="comp_id" value="<?=$value->u_id;?>" class="form-control">
                        <div class="form-group">
                            <label for="form-message"><?=$value->question?></label>
                            <input type="hidden" name="<?='qusid'.$a;?>" value="<?=$value->exam_id;?>" class="form-control">
                            <select name="<?='option'.$a;?>" class="form-control" >
                                <option value="">Choose Answer</option>
                                <option value="<?=$value->option1;?>"><?=$value->option1;?></option>
                                <option value="<?=$value->option2;?>"><?=$value->option2;?></option>
                                <option value="<?=$value->option3;?>"><?=$value->option3;?></option>
                                <option value="<?=$value->option4;?>"><?=$value->option4;?></option>
                            </select>
                        </div>
                        <?php $a++;}?>
                        <input type="hidden" name="jid" value="<?=$jid;?>" class="form-control">
                        <input type="hidden" name="count" value="<?=$a-1;?>" class="form-control">
                        <button type="submit" class="btn btn-primary">Send Answers</button>
                    </form>
                   <?php }?>
                </div>
            </div>
        </div>
        <div class="clearfix hidden-xs" style="width:100%; height:30px;"></div>
    </div>
	<script>
	setTimeout(function () {
   window.location.href = "<?=base_url(user/jobseekerprofile/Profile/info);?>"; //will redirect to your blog page (an ex: blog.html)
}, 2000); //will call the function after 2 secs.
	</script>
<?=$footer;?>