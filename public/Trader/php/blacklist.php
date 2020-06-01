<?php 
require_once 'db_connection.php';
require_once 'sql.php';

echo $_POST['check'];
echo $_GET['user_id'];

if($_POST['check']=="yes")
{
    pass0to2($_GET['user_id']);
    header("Location: ../b1.php"); 
}

else
{
    header("Location: ../b1.php"); 
}



?>