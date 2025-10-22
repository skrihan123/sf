<?php
session_start();
require_once '../config/config.php';
$action = $_REQUEST['submit'];
if ($action === 'Login') {
	$a_email = $_POST['a_email'];
	$a_password = md5($_POST['a_password']);
	$e_fcode = $_SESSION["vercode"];	
	$vercode = mysqli_real_escape_string($db, $_POST['vercode']);
	if ($vercode == $e_fcode) {
		$results = $db->query("SELECT * FROM `admin` WHERE a_email='$a_email' AND a_password='$a_password' AND a_status = '1'");
		if ($results->num_rows > 0) {
			$value = $db->query("SELECT a_id, a_email, a_usertype, a_pagepermission FROM `admin` WHERE a_email='$a_email'");
			$row = $value->fetch_object();
			session_regenerate_id();
			$sid = session_id();
			$_SESSION['SADMIN'] = $sid;
			$_SESSION['logintype'] = 'Admin';	
			$_SESSION['a_id'] = $row->a_id;
			$_SESSION['a_email'] = $row->a_email;
			$_SESSION['a_usertype'] = $row->a_usertype;
			$_SESSION['a_pagepermission'] = $row->a_pagepermission;
			$db->close();
			$_SESSION['e_msg'] = 'Logged in successfully.';
			$_SESSION['e_value'] = 'success';
			header("Location:../dashboard");
		} else {
			$_SESSION['e_msg'] = 'Sorry, Email or Password does not match or not being authenticated.';
			$_SESSION['e_value'] = 'warning';
			header("Location:../login");
		}
	} else {
		$_SESSION['e_msg'] = 'Sorry, Verification code does not match.';
		$_SESSION['e_value'] = 'warning';
		header("Location: ../login");
	}
}
if (md5($action) === md5('logout')) {
	unset($_SESSION['SADMIN']);
	unset($_SESSION['logintype']);
	unset($_SESSION['a_id']);
	unset($_SESSION['a_email']);
	unset($_SESSION['a_usertype']);
	unset($_SESSION['a_pagepermission']);
	//session_destroy();
	$_SESSION['e_msg'] = 'Logged out successfully.';
	$_SESSION['e_value'] = 'success';
	header("Location:../login");
	exit();
}
?>