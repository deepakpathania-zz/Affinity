<?php
    session_start();
    $temp= $_SESSION['user_username'];
    ini_set("display_errors",1);
    if(isset($_POST)){
        require '../_database/database.php';
        session_start();
        $user_shortbio=$_REQUEST['user_shortbio'];
        $user_dob=$_REQUEST['user_dob'];
        $user_blood_type=$_REQUEST['user_blood_type'];
        $user_organ=$_REQUEST['user_organ'];
        $user_organ_condition = $_REQUEST['user_organ_condition'];
        $user_blood_type_donor=$_REQUEST['user_blood_type_donor'];
        $user_organ_donor=$_REQUEST['user_organ_donor'];
        $user_waiting_time = $_REQUEST['user_waiting_time'];
        $user_waiting_time_donor = $_REQUEST['user_waiting_time_donor'];
        $user_organ_condition_donor = $_REQUEST['user_organ_condition_donor'];
        $sql3="UPDATE user SET user_shortbio='$user_shortbio',user_dob='$user_dob',user_blood_type='$user_blood_type',user_organ='$user_organ',user_organ_condition='$user_organ_condition',user_waiting_time='$user_waiting_time',user_blood_type_donor='$user_blood_type_donor',user_organ_donor='$user_organ_donor',user_organ_condition_donor='$user_organ_condition_donor',user_waiting_time_donor='$user_waiting_time_donor' WHERE user_username = '$temp'";
        $user_username=$_SESSION['user_username'];
        $sql4="INSERT INTO user(user_shortbio,user_dob,user_blood_type,user_organ,user_organ_condition,user_waiting_time,user_blood_type_donor,user_organ_donor,user_organ_condition_donor) VALUES ('$user_shortbio','$user_dob','$user_blood_type','$user_organ', '$user_organ_condition','$user_waiting_time', '$user_blood_type_donor','$user_organ_donor','$user_organ_condition_donor') WHERE user_username = '$temp'";
        $result = mysqli_query($database,"SELECT * FROM user WHERE user_username = '$user_username'");
        if( mysqli_num_rows($result) > 0) {
            mysqli_query($database,$sql3)or die(mysqli_error($database));
            header("location:../edit-profile.php?user_username=$user_username");
        }
        else{
            mysqli_query($database,$sql3)or die(mysqli_error($database));
            header("location:../edit-profile.php?user_username=$user_username");
        }  
    }    
?>