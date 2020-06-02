<?php 
session_start();
session_destroy();
if (count($_POST) > 0) {
    $_POST = array();
 }
header("Location: ../index.php"); 
?>