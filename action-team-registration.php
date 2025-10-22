<?php
require_once 'isfadmin/config/config.php';
$action = $_REQUEST['submit'];
switch ($action) {
    case 'addTeam':
        $team_name = mysqli_real_escape_string($db, $_POST['team_Name']);
        $team_email = mysqli_real_escape_string($db, $_POST['team_Email']);
        $team_phone = mysqli_real_escape_string($db, $_POST['team_phone']);

        $db->query("INSERT INTO `team_registration`(`tm_name`, `tm_email`, `tm_phone`, `tm_status`) VALUES ('$team_name', '$team_email', ' $team_phone', '1')");

        header("Location: thankyou");
        break;
    default;
        header("Location: 404");
}
?>