<?php
session_start();
require_once 'p-config.php';

if(isset($_SESSION['email'])){
    $email = $_SESSION['email'];
    echo $email."|<a href='logout-p.php'>Logout</a>";
} 

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Process</title>

 <!-- producer css file link -->
 <link rel="stylesheet" href="style1.css">
</head>
<body>
<div class="form-producer">
<form method="post" action="logout-p.php">
    <input type="submit" name="submit" value="Logout" class ="logout-btn">
</form>
</div>
</body>
</html>
