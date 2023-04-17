<?php
session_start();
session_destroy();
header('location: producer_login.php');
exit();
?>
