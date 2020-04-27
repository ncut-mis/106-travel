<?php
//echo '資料庫連線'."</br>";
@session_start();
$host = "localhost:33060";
$name = "root";
$password = "root";
$dbname = "topic106";

$_SESSION['link'] =  mysqli_connect($host,$name,$password,$dbname);

if($_SESSION['link'])
{
    mysqli_query($_SESSION['link'],"SET NAMES utf8");
    //echo"連線成功"."<br>";
}

else
{
    //echo '無法連線';
}

?>