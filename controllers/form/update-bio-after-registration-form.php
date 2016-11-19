<form action="components/update-bio-after-registration.php" method="post" enctype="multipart/form-data" id="UploadForm" autocomplete="off">
<?php
    $user_username = mysqli_real_escape_string($database,$_REQUEST['user_username']);
    $sql = "SELECT * FROM user WHERE user_username='$user_username'";
    $result = mysqli_query($database,$sql);
    $rws = mysqli_fetch_array($result);
?><h2>-> Details of receiver in duo</h2>
    <div class="col-md-6">
        <div class="form-group float-label-control">
            <label for="">Short Bio</label>
            <textarea data-role="tagsinput" class="form-control" style="resize:none;height:17%" placeholder="<?php echo $rws['user_shortbio'];?>" rows="10" placeholder="<?php echo $rws['user_shortbio'];?>" name="user_shortbio" value="<?php echo $rws['user_shortbio'];?>"><?php echo $rws['user_shortbio'];?></textarea>
        </div>
        <div class="form-groupfloat-label-control">
            <label for="">Blood type</label>
            <select class="form-control" name="user_blood_type" style="height:8%" required>
                <option>O +</option>
                <option>O -</option>
                <option selected>A +</option>
                <option>A -</option>
                 <option>B +</option>
                <option>B -</option>
                <option >AB +</option>
                <option>AB -</option>
            </select>
        </div> 
    </div>    
    <div class="col-md-6">
        <div class="form-groupfloat-label-control">
            <label for="">Organ you want</label>
            <select class="form-control" name="user_organ" style="height:8%" required>
                <option selected>Kidney</option>
                <option>Liver</option>
            </select>
        </div> 
        <div class="form-groupfloat-label-control">
            <label for="">Condition of organ</label>
            <select class="form-control" name="user_organ_condition" style="height:8%" required>
                <option >Diabetic</option>
                <option>Chronic Kidney Disease</option>
                <option>Renal failure</option>
                <option selected>Healthy</option>
            </select>
        </div>
        <div class="form-groupfloat-label-control">
            <label for="">Required in time</label>
            <select class="form-control" name="user_waiting_time" style="height:8%" required>
                <option>Urgent</option>
                <option>Under a month</option>
                <option>Under six months</option>
                <option>Under an year</option>
            </select>
        </div>
    </div>

<h2 style="margin-top:30px;padding-top:30px;">-> Details of donor in duo</h2> 
 <div class="row">
 <div class="col-md-6">
        <div class="form-groupfloat-label-control">
            <label for="">Blood type</label>
            <select class="form-control" name="user_blood_type_donor" style="height:8%" required>
                <option>O +</option>
                <option>O -</option>
                <option selected>A +</option>
                <option>A -</option>
                 <option>B +</option>
                <option>B -</option>
                <option >AB +</option>
                <option>AB -</option>
            </select>
        </div> 
        <div class="form-groupfloat-label-control">
            <label for="">Organ you want to donate</label>
            <select class="form-control" name="user_organ_donor" style="height:8%" required>
                <option selected>Kidney</option>
                <option>Liver</option>
            </select>
        </div> 
    </div>    
    <div class="col-md-6">
        <div class="form-groupfloat-label-control">
            <label for="">Condition of organ</label>
            <select class="form-control" name="user_organ_condition_donor" style="height:8%" required>
                <option >Diabetic</option>
                <option>Chronic Kidney Disease</option>
                <option>Renal failure</option>
                <option selected>Healthy</option>
            </select>
        </div>
        <div class="form-groupfloat-label-control">
            <label for="">Can donate in time</label>
            <select class="form-control" name="user_waiting_time_donor" style="height:8%" required>
                <option>Urgent</option>
                <option>Under a month</option>
                <option>Under six months</option>
                <option>Under an year</option>
            </select>
        </div>
    </div>
</div>
<div class="col-md-12">                  
    <div class="submit">           
        <center>
            <button class="btn btn-primary ladda-button" data-style="zoom-in" type="submit"  id="SubmitButton" value="Upload" style="margin-top:30px;
            font-size: 20px;
            border-radius: 0;margin-bottom:-10px"/>Save Your Profile</button>
        </center>
    </div>
</div>
<?php
    $user_username =  $_POST['user_username'];
?>

</form>