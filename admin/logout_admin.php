<?php
session_start();
session_destroy();
$_SESSION['status_login_admin']=false;
header('location: login_admin.php');
?>