<?php
require_once 'isfadmin/config/config.php';
$action = $_REQUEST['submit'];
switch ($action) {
  case 'addContact':
    $c_name = mysqli_real_escape_string($db, $_POST['c_name']);
    $c_email = mysqli_real_escape_string($db, $_POST['c_email']);
    $c_phone = mysqli_real_escape_string($db, $_POST['c_phone']);
    $c_member = mysqli_real_escape_string($db, $_POST['c_member']);
    $c_message = mysqli_real_escape_string($db, $_POST['c_message']);


    $db->query("INSERT INTO `contact`(`ct_name`, `ct_email`, `ct_phone`, `ct_member`, `ct_message`, `ct_status`) VALUES ('$c_name', '$c_email', '$c_phone', '$c_member', '$c_message', '1')");
    header("Location:thankyou");
    break;
  default;
    header("Location:404");
}
?>