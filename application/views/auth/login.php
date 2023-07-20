<!DOCTYPE html>
<html>
<head lang="en">
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
	<meta http-equiv="x-ua-compatible" content="ie=edge">
	<title>Login Massage Dev</title> 
    <link rel="stylesheet" href="<?= base_url(); ?>asset/css/separate/pages/login.min.css">
    <link rel="stylesheet" href="<?= base_url(); ?>asset/css/lib/font-awesome/font-awesome.min.css">
    <link rel="stylesheet" href="<?= base_url(); ?>asset/css/lib/bootstrap/bootstrap.min.css">
    <link rel="stylesheet" href="<?= base_url(); ?>asset/css/main.css">
	<link rel="stylesheet" href="<?= base_url(); ?>asset/css/lib/bootstrap-sweetalert/sweetalert.css">
	<link rel="stylesheet" href="<?= base_url(); ?>asset/css/separate/vendor/sweet-alert-animations.min.css">
</head>
<body>

    <div class="page-center">
        <div class="page-center-in">
            <div class="container-fluid"> 
                <form class="sign-box" method="post" action="<?= base_url('auth'); ?>">
                    <div class="sign-avatar">
                        <img src="<?= base_url(); ?>asset/img/avatar-sign.png" alt="">
                    </div>
                    <?= $this->session->flashdata('massage') ?>
                    <header class="sign-title">Sign In</header>
                    <div class="form-group">
                        <input type="text" class="form-control" name="username" placeholder="Username" value="<?= set_value('username'); ?>"/>
                        <?= form_error('username', '<small class="text-danger">', '</small>'); ?>
                    </div>
                    <div class="form-group">
                        <input type="password" class="form-control" name="password" placeholder="Password"/>
                    </div>
                    <!-- <div class="form-group">
                        <div class="checkbox float-left">
                            <input type="checkbox" id="signed-in"/>
                            <label for="signed-in">Keep me signed in</label>
                        </div>
                        <div class="float-right reset">
                            <a href="#">Reset Password</a>
                        </div>
                    </div> -->
                    <button type="submit" class="btn btn-rounded">Sign in</button>
                    <!-- <p class="sign-note">New to our website? <a href="sign-up.html">Sign up</a></p> -->
                    <!--<button type="button" class="close">
                        <span aria-hidden="true">&times;</span>
                    </button>-->
                </form>
            </div>
        </div>
    </div><!--.page-center-->


<script src="<?= base_url(); ?>asset/js/lib/jquery/jquery-3.2.1.min.js"></script>
<script src="<?= base_url(); ?>asset/js/lib/popper/popper.min.js"></script>
<script src="<?= base_url(); ?>asset/js/lib/tether/tether.min.js"></script>
<script src="<?= base_url(); ?>asset/js/lib/bootstrap/bootstrap.min.js"></script>
<script src="<?= base_url(); ?>asset/js/plugins.js"></script>
<script type="text/javascript" src="<?= base_url(); ?>asset/js/lib/match-height/jquery.matchHeight.min.js"></script> 
<script src="<?= base_url();?>asset/js/lib/bootstrap-sweetalert/sweetalert.min.js"></script>
<script>
    $(function() {
        $('.page-center').matchHeight({
            target: $('html')
        });

        $(window).resize(function(){
            setTimeout(function(){
                $('.page-center').matchHeight({ remove: true });
                $('.page-center').matchHeight({
                    target: $('html')
                });
            },100);
        });
    });
</script>
<?php  if ($this->session->flashdata('error')){ ?>
    <script>
        swal({
            title: " ",
            text: "Session expired, silahkan login kembali!",
            type: "error", 
            timer: 2000,
            showCancelButton: false,
            showConfirmButton: false
        });
    </script>
<?php } ?>
<script src="<?= base_url(); ?>asset/js/app.js"></script>
</body>
</html>