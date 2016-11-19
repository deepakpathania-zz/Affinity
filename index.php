<?php include 'components/session-check-index.php' ?>
<?php require '_database/database.php'; ?>
<?php include 'controllers/base/head.php' ?>
<body style="background:#7092bf !important">	
    <script type="text/javascript"> 
        ChangeIt();
    </script>
<?php include 'controllers/navigation/index-before-login-navigation.php' ?>
    <section id="home" name="home"></section>
        <div id="headerwrap"  style="position:absolute;left:35%;">
            <div class="container">
                <div class="row form centered">
                    <div class="col-lg-12">
                    </div>
                    <div class="row">
                    <div class="col-lg-6">
                        <h1><b>Affinity</b></h1>
                        <h3>Simplify compatibility!</h3>
                        <br>
                        <?php include 'controllers/form/registration-form.php' ?>
                    </div>
                </div>
                <div class="col-lg-8">
                </div>
                <div class="col-lg-2">
                    <br>
                </div>
            </div>
        </div> <!--/ .container -->
    </div><!--/ #headerwrap -->
</body>    