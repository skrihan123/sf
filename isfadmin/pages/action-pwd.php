<?php
session_start();
require_once '../config/config.php';
$action = $_REQUEST['submit'];
if ($action == 'updatepwd') {
	$atype = $_SESSION['a_usertype'];
	$a_idchk = $_REQUEST['a_idchk'];
	$a_pwd = md5($_REQUEST['a_pwd']);
	$confirm_a_pwd = md5($_REQUEST['confirm_a_pwd']);
	$a_vpwd = $_REQUEST['a_pwd'];
	if ($a_pwd !== $confirm_a_pwd) {
		$db->close();
		$_SESSION['e_msg'] = 'Sorry, Passwords does not match.';
		$_SESSION['e_value'] = 'warning';
		header("Location: ../dashboard");
	} else {
		$db->query("UPDATE admin SET a_password='$a_pwd', a_vpwd='$a_vpwd' WHERE a_id='$a_idchk' AND a_usertype='$atype'");
		$db->close();
		$_SESSION['e_msg'] = 'Password reset successfully.';
		$_SESSION['e_value'] = 'success';
		header("Location: ../dashboard");
	}
}
