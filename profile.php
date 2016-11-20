<?php include 'components/authentication.php' ?> 
<?php include 'components/session-check-profile.php' ?>
<?php include 'controllers/base/head.php' ?>
<?php include 'controllers/navigation/first-navigation.php' ?> 
<?php include 'controllers/base/style.php' ?>
<?php 
    if($_GET["follow"]=="same"){
        $dialogue="Your can't follow yourself! ";
    }
?>
    <script>
        $.growl("<?php echo $dialogue; ?> ", {
            animate: {
                enter: 'animated zoomInDown',
                exit: 'animated zoomOutUp'
            }								
        });
    </script>
<?php 
    session_start();
    $current_user = $_SESSION['user_username'];
    $user_username = mysqli_real_escape_string($database,$_REQUEST['user_username']);
    $profile_username=$rws['user_username'];
?>
<?php
    $url = 'http://'.$_SERVER['HTTP_HOST'].$_SERVER['PHP_SELF'];
?>
<div class="profile">
	<div class="row clearfix">
		<!-- <div class="col-md-12 column"> -->
            <div>
                <center>
                    <img src="assets/img/user.png" class="img-responsive profile-avatar">
                </center>
                <h1 class="text-center profile-text profile-name"><?php echo $rws['user_firstname'];?> <?php echo $rws['user_lastname'];?></h1>
                <h2 class="text-center profile-text profile-profession"><?php echo $rws['user_profession'];?></h2>
                <br>
            <div class="panel-group white shadow" id="panel-profile" style="width: 90%;
                margin-left: 6%;margin-top:-3%">
                    <h1 style="text-align:center;padding-top:20px;padding-bottom:10px">About receiver</h1>
                    <div class="panel panel-default">
                        <div id="panel-element-info" class="panel-collapse collapse in">
                            <div class="panel-body">
                                <div class="col-md-8 column">
                                    <p class="text-center profile-title"><i class="fa fa-info"></i> Basic</p>
                                    <hr>
<?php
    if ($rws['user_shortbio']){
?>   
                                    <div class="col-md-4">
                                        <p class="profile-details"><i class="fa fa-info"></i> Bio</p>
                                    </div>
                                    <div class="col-md-8">
                                        <p><?php echo $rws['user_shortbio'];?></p>
                                    </div>
<?php } ?>
<?php
    if ($rws['user_username']){
?>   
                                    <div class="col-md-4">
                                        <p class="profile-details"><i class="fa fa-user"></i> Username</p>
                                    </div>
                                    <div class="col-md-8">
                                        <p><?php echo $rws['user_username'];?></p>
                                    </div>
<?php } ?>
<?php
    if ($rws['user_address']){
?>   
                                    <div class="col-md-4">
                                        <p class="profile-details"><i class="fa fa-info"></i> Location</p>
                                    </div>
                                    <div class="col-md-8">
                                        <p><?php echo $rws['user_address'];?></p>
                                    </div>
<?php } ?>
<?php
    if ($rws['user_email']){
?>   
                                    <div class="col-md-4">
                                        <p class="profile-details"><i class="fa fa-envelope"></i> Email</p>
                                    </div>
                                    <div class="col-md-8">                                    
                                        <p>Not available till match</p>
                                    </div>
<?php } ?>
<?php
    if ($rws['user_country']){
?>   
                                    <div class="col-md-4">
                                        <p class="profile-details"><i class="fa fa-info"></i> Country</p>
                                    </div>
                                    <div class="col-md-8">
                                        <p><?php echo $rws['user_country'];?></p>
                                    </div>
<?php } ?>
                                </div>
                                <div class="col-md-4 column">
                                    <p class="text-center profile-title"><i class="fa fa-info"></i> Personal</p>
                                    <hr>
<?php
    if ($rws['user_gender']){
?>   
                                    <div class="col-md-4">
                                        <p class="profile-details"><i class="fa fa-user"></i> Gender</p>
                                    </div>
                                    <div class="col-md-8">
                                        <p><?php echo $rws['user_gender'];?></p>
                                    </div>
<?php } ?>
<?php
    if ($rws['user_organ']){
?>   
                                    <div class="col-md-4">
                                        <p class="profile-details"><i class="fa fa-medkit"></i>  Organ</p>
                                    </div>
                                    <div class="col-md-8">
                                        <p><?php echo $rws['user_organ'];?></p>
                                    </div>
<?php } ?>
<?php
    if ($rws['user_blood_type']){
?>   
                                    <div class="col-md-4 column">
                                        <p class="profile-details"><i class="fa fa-tint"></i> Blood gp</p>
                                    </div>
                                    <div class="col-md-8">
                                        <p><?php echo $rws['user_blood_type'];?></p>
                                    </div>
<?php } ?>
<?php
    if ($rws['user_waiting_time']){
?>   
                                    <div class="col-md-4 column">
                                        <p class="profile-details"><i class="fa fa-clock"></i> Wait time</p>
                                    </div>
                                    <div class="col-md-8">
                                        <p><?php echo $rws['user_waiting_time'];?></p>
                                    </div>
<?php } ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
<br/><br/>

        <div class="panel-group white shadow" id="panel-profile" style="width: 90%;
                margin-left: 6%;margin-top:-3%">
                    <h1 style="text-align:center;padding-top:20px;padding-bottom:10px">About donator</h1>
                    <div class="panel panel-default">
                        <div id="panel-element-info" class="panel-collapse collapse in">
                            <div class="panel-body">
                                <div class="col-md-8 column">
                                    <p class="text-center profile-title"><i class="fa fa-info"></i> Basic</p>
                                    <hr>
<?php
    if ($rws['user_blood_type_donor']){
?>   
                                    <div class="col-md-4">
                                        <p class="profile-details"><i class="fa fa-tint"></i> Blood gp</p>
                                    </div>
                                    <div class="col-md-8">
                                        <p><?php echo $rws['user_blood_type_donor'];?></p>
                                    </div>
<?php } ?>
<?php
    if ($rws['user_organ_condition_donor']){
?>   
                                    <div class="col-md-4">
                                        <p class="profile-details"><i class="fa fa-heart"></i> Condition</p>
                                    </div>
                                    <div class="col-md-8">
                                        <p><?php echo $rws['user_organ_condition_donor'];?></p>
                                    </div>
<?php } ?>
                                </div>
                                <div class="col-md-4 column">
                                    <p class="text-center profile-title"><i class="fa fa-info"></i> Personal</p>
                                    <hr>
<?php
    if ($rws['user_gender']){
?>   
                                    <div class="col-md-4">
                                        <p class="profile-details"><i class="fa fa-user"></i> Gender</p>
                                    </div>
                                    <div class="col-md-8">
                                        <p><?php echo $rws['user_gender'];?></p>
                                    </div>
<?php } ?>
<?php
    if ($rws['user_organ_donor']){
?>   
                                    <div class="col-md-4">
                                        <p class="profile-details"><i class="fa fa-medkit"></i>  Organ</p>
                                    </div>
                                    <div class="col-md-8">
                                        <p><?php echo $rws['user_organ_donor'];?></p>
                                    </div>
<?php } ?>

<?php
    if ($rws['user_waiting_time']){
?>   
                                    <div class="col-md-4 column">
                                        <p class="profile-details"><i class="fa fa-clock"></i> Wait time</p>
                                    </div>
                                    <div class="col-md-8">
                                        <p><?php echo $rws['user_waiting_time'];?></p>
                                    </div>
<?php } ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
<br/><br/>

            </div>
    <div style="text-align: center;">
        <button type="button" class=" shadow btn btn-info btn-lg quote">Find  matching  percentage!</button>
    </div>
    <?php 
        $current_user = $_SESSION['user_username'];
        $profile_user = $rws['user_username'];
        include '_database/database.php';
        $similar=0;
        $sql = "SELECT * FROM user WHERE user_username = '$current_user'";
        $result = mysqli_query($database,$sql) or die(mysqli_error($database));
        $cws = mysqli_fetch_array($result);
        $p_blood = $rws['user_blood_type_donor'];
        $p_user_organ_con = $rws['user_organ_condition_donor'];
        $p_user_organ = $rws['user_organ_donor'];
        $p_wait = $rws['user_waiting_time_donor'];
        $c_blood = $cws['user_blood_type'];
        $c_user_organ_con = $cws['user_organ_condition'];
        $c_user_organ = $cws['user_organ'];
        $c_wait = $cws['user_waiting_time'];
        if($p_user_organ==$c_user_organ) {
        if($p_blood==$c_blood) {
            $similar=$similar+2;
        }
        else {
            $similar=$similar-2;
        }
        if($p_user_organ_con == $c_user_organ_con) {
            $similar=$similar+1;
        }
        else {
            $similar=$similar-1;
        }
        if($p_user_organ_con==$c_user_organ_con) {
            $similar=$similar+1;
        }
        else {
            $similar=$similar-1;
        }
    }
        else {
            $similar = -100;
        }
        
    ?>
<br/><br/>
    <p><?php echo "p_user_organ" .$p_user_organ.  "c_user_organ" . $c_user_organ. " similarity : " .$similar; ?></p>
		<!-- </div> -->
	</div>
</div>