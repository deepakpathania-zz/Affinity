<?php include 'components/authentication.php' ?>     
<?php include 'components/session-check.php' ?>
<?php include 'controllers/base/head.php' ?>
<?php include 'controllers/navigation/first-navigation.php' ?>   
                                                    <div class="container">
                                                      <div class="row clearfix">
                                                          <div class="col-md-12 column">
                                                              <div class="row clearfix">
<?php
    include '_database/database.php';
    session_start();
    $ctr=0;
    $current_user = $_SESSION['user_username'];
    $sql = "SELECT * FROM user WHERE user_username != '$current_user' order by user_id desc";
    $result = mysqli_query($database,$sql) or die(mysqli_error($database));
    while($rws = mysqli_fetch_array($result)){ 
    ++$ctr;
?>
                                                                  <div class="col-md-4 column">
                                                                    <div class="panel-group shadow" id="panel-<?php echo $rws['user_id']; ?>">
                                                                        <div class="panel panel-default">
                                                                            <div id="panel-element-<?php echo $rws['user_id']; ?>" class="panel-collapse collapse in">
                                                                                <div class="panel-body">
                                                                                    <div class="col-md-12 column" style="text-align:center;margin-left:10px;margin-top:5px">
                                                                                        <img src="assets/img/user.png" name="aboutme" class="img-responsive">                                  
                                                                                    </div>
                                                                                    <div class="col-md-12 column" style="text-align:center">
                                                                                        <h2><span><a href="profile.php?user_username=<?php echo $rws['user_username'];?>"><?php echo $rws['user_firstname'];?> <?php echo $rws['user_lastname'];?></a></span></h2>
                                                                                        
                                                                                        <h4><span style="color:black"><?php echo $rws['user_blood_type'] . ",";?>&nbsp;&nbsp;<?php echo $rws['user_organ'].","; ?>&nbsp;&nbsp;<?php echo $rws['user_waiting_time'];?></span></h4>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                  </div>
 <?php } ?>                                                         
                                                              </div>
                                                          </div>
                                                      </div>
                                                  </div>