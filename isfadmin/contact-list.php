<?php
session_start();
require_once 'config/config.php';
require_once 'config/helper.php';
//require_once 'config/auth_helper.php';
$a_idchk = $_SESSION['a_id'];
ob_start("ob_html_compress");
include_once 'header.php';
?>
<div id="page-wrapper">
  <?php include_once 'msg.php'; ?>
  <div class="row">
    <div class="col-lg-12">
      <h2 class="page-header">Contact List</h2>
    </div>
  </div>
  <div class="row">
    <div class="col-lg-12">
      <div class="panel panel-default">
        <div class="panel-body">
          <div class="dataTable_wrapper">
            <table width="100%" class="table table-striped table-bordered table-hover table-condensed" id="dataTables-example">
              <thead>
                <tr>
                  <th class="no-sort">Sl.</th>
                  <th>Name</th>
                  <th>Email</th>
                  <th>Phone</th>
                  <th>Member</th>
                  <th>Message</th>
                </tr>
              </thead>
              <tbody>
                <?php
                $sl = 0;
                $data = $db->query("SELECT * FROM `contact` ORDER BY ct_id ASC");
                while ($value = $data->fetch_object()) {
                  $sl++;
                ?>
                  <tr>
                    <td><?php echo $sl; ?></td>
                    <td><?php echo !empty($value->ct_name) ? $value->ct_name : ''; ?></td>
                    <td><?php echo (!empty($value->ct_email)) ? $value->ct_email : ''; ?></td>
                    <td><?php echo (!empty($value->ct_phone)) ? $value->ct_phone : ''; ?></td>
                    <td><?php echo (!empty($value->ct_member)) ? $value->ct_member : ''; ?></td>
                    <td><?php echo (!empty($value->ct_message)) ? $value->ct_message : ''; ?></td>
                  </tr>
                <?php
                }
                ?>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<?php include_once 'footer.php'; ?>