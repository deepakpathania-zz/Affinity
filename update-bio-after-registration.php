<?php include '_database/database.php' ?>
<?php include 'controllers/base/head.php' ?>
        <div class="container" style="margin-top:-65px">
            <div class="no-gutter row">             
                <div class="col-md-12">
                     <center><h2 style="color:white;">Fill Up the details below to Continue</h2></center>
              	     <div class="panel panel-default shadow" id="sidebar">
                        <div class="panel-body">
<?php
    $sql = "SELECT * FROM user where user_username='$user_username'";
    $result = mysqli_query($database,$sql) or die(mysqli_error($database)); 
    $rws = mysqli_fetch_array($result);
?>                
<?php include 'controllers/form/update-bio-after-registration-form.php' ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>