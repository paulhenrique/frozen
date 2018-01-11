<?php
session_start();
session_unset();
session_destroy();
$_SESSION = array();
echo "<script>location.href='../index.php'</script>";
?>
