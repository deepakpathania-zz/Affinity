<?php include 'components/session-check-index.php' ?>
<?php include 'controllers/base/head.php' ?>
<div class="container jumbotron shadow" style="position:absolute; top:18%; left:32%;padding-top:10px;padding-bottom:10px">
    <div class="row">
      <div class="main">
          <h3 style="color:#65aeee;">Please Log In or <a href="index.php">Sign Up</a></h3>
          <form role="form" action="components/login-process.php" method="post" name="login">
              <div class="form-group">
                  <label for="inputUsernameEmail">Username or email</label>
                  <input type="text" class="form-control" id="inputUsernameEmail" name="username" placeholder="Username">
              </div>
              <div class="form-group">
                  <label for="inputPassword">Password</label>
                  <input type="password" class="form-control" id="inputPassword" name="password" placeholder="Password">
              </div>
              <hr/>
              <button type="submit" class="btn btn btn-primary ladda-button" data-style="zoom-in" value="Sign In" name="login_button" style="margin-left:180px;font-size:25px;">
                  Log In  
              </button>
          </form>
        </div>
    </div>
</div>