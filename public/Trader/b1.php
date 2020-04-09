<?php
require_once '../php/db_connection.php';
require_once '../php/sql.php';

$dates = get_guides();
echo "所有導遊資料"."<br>";
print_r($dates);
echo "<br>"."最後一筆導遊資料"."<br>";
$lastdata = get_last_guides();
print_r($lastdata);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
</body>
</html>