<?php
require_once 'isfadmin/config/config.php';
$action = $_REQUEST['submit'];
switch ($action) {
  case 'addSponsor':
    $s_name = mysqli_real_escape_string($db, $_POST['sponsor_Name']);
    $s_email = mysqli_real_escape_string($db, $_POST['sponsor_Email']);
    $s_phone = mysqli_real_escape_string($db, $_POST['sponsor_phone']);

    $db->query("INSERT INTO `sponsor_registration`(`sp_name`, `sp_email`, `sp_phone`, `sp_status`) VALUES ('$s_name', '$s_email', '$s_phone', '1')");
    header("Location:thankyou");
    break;
  default;
    header("Location:404");
}
?>