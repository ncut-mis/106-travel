<?php
require_once 'db_connection.php';
require_once 'sql.php';

echo $_POST['check'];
echo $_GET['id'];

if($_POST['check']=="pass")
{
    pass0to1($_GET['id']);
    header("Location: ../b1.php"); 
}

else
{
    header("Location: ../b1.php"); 
}


?>