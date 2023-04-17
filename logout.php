<?php
session_start();
session_destroy();
header('location: consumer_login.php');
exit();
?>
