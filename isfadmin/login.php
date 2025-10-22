<?php
session_start();
require_once 'config/config.php';
require_once 'config/helper.php';
ob_start("ob_html_compress");
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">
        <title>Welcome to Admin</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
        <link href="dist/css/sb-admin-2.css" rel="stylesheet">
        <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
        <style>body { background: #e0ebeb;}</style>
		<script src="https://www.google.com/recaptcha/api.js" async defer></script>
		<script src="https://ajax.aspnetcdn.com/ajax/jquery.validate/1.15.0/jquery.validate.min.js"></script>
		<script src="https://www.google.com/recaptcha/api.js"></script>
    </head>
    <body>
        <div class="container">
            <div class="row">
                <?php include_once 'msg.php'; ?> 
                <div class="col-md-4 col-md-offset-4">
                   <!-- <img src="dist/images/shopweb-logosmall.PNG" class="img-responsive center-block" alt="Logo" style="margin-top:50px;"/>-->
                    <div class="login-panel panel panel-default">
                        <div class="panel-body">
                            <form class="form-signin" method="post" action="pages/loginaction.php" enctype="multipart/form-data" >
                                <fieldset>
                                    <div class="form-group">
                                        <input class="form-control" placeholder="E-mail" name="a_email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" type="email" autofocus title="Please Enter Email" required>
									</div>
                                    <div class="form-group">
                                        <input class="form-control" placeholder="Password" name="a_password" type="password" value="" title="Please Enter Password" required>
                                    </div>
									<div class="form-group">
										<input type="text" name="vercode" class="form-control" placeholder="Verfication Code" autocomplete="off" required>
									</div>
									<div class="form-group small clearfix">
										<label class="checkbox-inline">Verification Code</label>
										<img src="captcha.php">
									</div>
									<?php /* ?><div class="form-group">
										<div class="g-recaptcha" data-sitekey="6LfGxCcbAAAAAGfb_d7g7KBg3l34p4NIt73gscbR"></div>
										<input type="hidden" name="recaptcha" data-rule-recaptcha="true" required="">
									</div><?php */ ?>
                                    <button class="btn btn-danger btn-block" type="submit">Login</button>
                                    <input type="hidden" name="submit" value="Login">
                                </fieldset>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php
        $db->close();
        $_SESSION['e_msg'] = '';
        ?>
        <script src="components/metisMenu.min.js"></script> 
        <!-- Custom Theme JavaScript --> 
        <script src="dist/js/sb-admin-2.js"></script>
    </body>
</html>
<?php ob_end_flush(); ?>
<?php /* ?><script>
$("form").submit(function(event) {
	var recaptcha = $("#g-recaptcha-response").val();
	if (recaptcha === "") {
		event.preventDefault();
		alert("Please check the recaptcha");
	}
});
</script><?php */ ?>