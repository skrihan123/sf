<?php
session_start();
require_once 'config/config.php';
require_once 'config/helper.php';

if (!empty($_SESSION['SADMIN'])) {
	if ($_SESSION['SADMIN'] != session_id() && $_SESSION['logintype'] != 'Admin') {
		header('Location: login');
		exit;
	}
} else {
	header('Location: login');
	exit;
}
$a_idchk = $_SESSION['a_id'];
//$logintype = $_SESSION['logintype'];
//$atype = $_SESSION['a_usertype'];
ob_start("ob_html_compress");
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="Online Medicine Store">
        <meta name="author" content="shopweb.in">
        <title>Welcome to Dashboard</title>
        <?php include_once 'header.php'; ?>
		<div id="page-wrapper">
			<?php include_once 'msg.php'; ?> 
			<div class="row"> 
				<div class="col-lg-12">
					<h2 style="color: green;">Welcome to Dashboard</h2>
				</div>
			</div>
		</div>
		<?php include_once 'footer.php'; ?>	