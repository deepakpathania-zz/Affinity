<?php
    ini_set("display_errors",1);
    session_start();
    $temp=$_SESSION['user_username'];
    if(isset($_POST)){
        require '../_database/database.php';
        $result = mysqli_query($database,"SELECT * FROM user WHERE user_username = '$temp'");
        if( mysqli_num_rows($result) > 0) {
            if(!empty($_FILES['BackgroundImageFile']['name'])){
                mysqli_query($database,$sql1)or die(mysqli_error($database));
                header("location:../edit-profile.php?user_username=$temp");
            }
        } 
        else {
            mysqli_query($database,$sql2)or die(mysqli_error($database));
            header("location:../edit-profile.php?user_username=$temp");
        }
        $Destination = '../userfiles/avatars'; 
        $user_firstname=$_REQUEST['user_firstname'];
        $user_lastname=$_REQUEST['user_lastname'];
        $user_email=$_REQUEST['user_email'];
        $user_password=$_REQUEST['user_password'];
        $user_shortbio=$_REQUEST['user_shortbio'];   
        $sql3="UPDATE user SET user_firstname='$user_firstname',user_lastname='$user_lastname',user_email='$user_email',user_password='$user_password',user_shortbio='$user_shortbio' WHERE user_username = '$temp'";
            mysqli_query($database,$sql3)or die(mysqli_error($database));
            header("location:../edit-profile.php?user_username=$temp&request=profile-update&status=success");
    }    
?>