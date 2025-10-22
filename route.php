<?php
//echo "<pre>";print_r($_SERVER);exit;
$r = $_SERVER['REQUEST_URI'];
//echo $r;exit;
//include('admin/config/config.php');
$arr = explode('/', $r);
$r = end($arr);
$r = str_replace('/', '', $r);
if ($r == '' || $r == 'index' || $r == 'index.php') {
  include('index.php');
} elseif (file_exists($r . '.html')) {
  include($r . '.html');
} elseif (file_exists($r . '.css')) {
  include($r . '.css');
} elseif (file_exists($r . '.js')) {
  include($r . '.js');
} elseif (file_exists($r . '.php')) {
  include($r . '.php');
} elseif (file_exists($r)) {
  include($r);
} else {
  include('404.php');
}
?>