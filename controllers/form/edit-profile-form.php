<form action="components/update-profile.php" method="post" enctype="multipart/form-data" id="UploadForm" style="shadow">
    <!-- Nav tabs -->
    <ul class="nav nav-tabs">
      <li class="active"><a href="#general" data-toggle="tab">About receiver</a></li>
      <li><a href="#personal" data-toggle="tab">About Donor</a></li>
    </ul>
    <!-- Tab panes -->
    <div class="tab-content">
        <div class="tab-pane fade in active" id="general">         
            <div class="col-md-6">
                <div class="form-group float-label-control">                      
                    <label for="">First Name</label>
                    <input type="text" class="form-control" placeholder="<?php echo $rws['user_firstname'];?>" name="user_firstname" value="<?php echo $rws['user_firstname'];?>">
                </div>
                <div class="form-group float-label-control">  
                    <label for="">Last Name</label>
                    <input type="text" class="form-control" placeholder="<?php echo $rws['user_lastname'];?>" name="user_lastname" value="<?php echo $rws['user_lastname'];?>">
                </div>
                <div class="form-group float-label-control">
                    <label for="">Looking for</label> 
                    <input type="text" class="form-control" placeholder="<?php echo $rws['user_organ'];?>" name="user_organ" value="<?php echo $rws['user_organ'];?>">
                </div>
                <div class="form-group float-label-control">
                    <label for="">Blood Type</label> 
                    <input type="text" class="form-control" placeholder="<?php echo $rws['user_blood_type'];?>" name="user_blood_type" value="<?php echo $rws['user_blood_type'];?>">
                </div> 
            </div>  
            <div class="col-md-6">
                <label for="">Username</label>
                <div class="form-group float-label-control">
                    <a href="http://<?php echo $rws['domain_websiteaddress'];?>/<?php echo $rws['user_username'];?>">        
                        <div class="input-group">
                            <span class="input-group-addon">http://affinity.com<?php echo $rws['domain_websiteaddress'];?>/</span>
                            <fieldset disabled> 
                                <input type="text" class="form-control" placeholder="<?php echo $rws['user_username'];?>" name="user_username" value="<?php echo $rws['user_username'];?>" id="disabledTextInput" autocomplete="off">
                            </fieldset>  
                        </div>
                    </a>
                </div>
                <div class="form-group float-label-control">
                    <label for="">Password</label>
                    <input type="password" class="form-control" placeholder="<?php echo $rws['user_password'];?>" name="user_password" value="<?php echo $rws['user_password'];?>">
                </div>
                <div class="form-group float-label-control">
                    <label for="">Email</label> 
                    <input type="text" class="form-control" placeholder="<?php echo $rws['user_email'];?>" name="user_email" value="<?php echo $rws['user_email'];?>">
                </div>
                <div class="form-group float-label-control">
                    <label for="">Required in Time</label> 
                    <input type="text" class="form-control" placeholder="<?php echo $rws['user_waiting_time'];?>" name="user_waiting_time" value="<?php echo $rws['user_waiting_time'];?>">
                </div>   
            </div>
            <div class="row">
                <div class="col-md-12">
                    <label for="">Short Bio</label>
                    <textarea class="form-control" placeholder="<?php echo $rws['user_shortbio'];?>" rows="3" placeholder="<?php echo $rws['user_shortbio'];?>" name="user_shortbio" value="<?php echo $rws['user_shortbio'];?>"><?php echo $rws['user_shortbio'];?></textarea>
                </div>
            </div>
        </div>
        <div class="tab-pane fade" id="personal">
            <div class="col-md-6">
                <div class="form-group float-label-control">
                    <label for="">Blood type</label>
                    <input type="text" class="form-control" placeholder="<?php echo $rws['user_blood_type_donor'];?>" name="user_blood_type_donor" value="<?php echo $rws['user_blood_type_donor'];?>">
                </div>
                <div class="form-group float-label-control">
                    <label for="">Can donate</label> 
                    <input type="text" class="form-control" placeholder="<?php echo $rws['user_organ_donor'];?>" name="user_organ_donor" value="<?php echo $rws['user_organ_donor'];?>">
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group float-label-control">
                    <label for="">Organ condition</label>
                    <input type="text" class="form-control" placeholder="<?php echo $rws['user_organ_condition_donor'];?>" name="user_organ_condition_donor" value="<?php echo $rws['user_organ_condition_donor'];?>">    
                </div>
                <div class="form-group float-label-control">
                    <label for="">Can give in Time</label> 
                    <input type="text" class="form-control" placeholder="<?php echo $rws['user_waiting_time_donor'];?>" name="user_waiting_time_donor" value="<?php echo $rws['user_waiting_time_donor'];?>">
                </div>
            </div>
        </div>
    </div>     
    <br>
    <div class="submit">
        <center>
            <button class="btn btn-primary ladda-button" data-style="zoom-in" type="submit"  id="SubmitButton" value="Upload" style="border-radius:0;font-size:20px"/>Save Your Profile</button>
        </center>
    </div>
</form>