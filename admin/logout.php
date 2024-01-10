
<?php 
error_reporting();
session_start();

unset($_SESSION['owner']);
unset($_SESSION['webportal']);

session_destroy(); //session di hancurkan

header('location:index1.php'); //redirec ke halaman login

?>
