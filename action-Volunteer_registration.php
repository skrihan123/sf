<?php
require_once 'isfadmin/config/config.php';
$action = $_REQUEST['submit'];
switch ($action) {
  case 'addVolunteer':
    $v_name = mysqli_real_escape_string($db, $_POST['volunteer_Name']);
    $v_email = mysqli_real_escape_string($db, $_POST['volunteer_Email']);
    $v_phone = mysqli_real_escape_string($db, $_POST['volunteer_phone']);

    $db->query("INSERT INTO `volunteer_registration`(`vt_name`, `vt_email`, `vt_phone`, `vt_status`) VALUES ('$v_name','$v_email','$v_phone','1')");

    header("Location: thankyou");
    break;
  default;
    header("Location:404");
}
?>