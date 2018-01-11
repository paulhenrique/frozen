<?php
include'lib.php';
$action = $_GET["a"];

switch ($action) {
  case 'login':
    $result = verify_login();
    if($result)
      header('location: ../applications/');
    break;

  default:

    break;
}
?>
