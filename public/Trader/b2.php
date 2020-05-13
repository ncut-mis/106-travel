<?php
require_once 'php/db_connection.php';
require_once 'php/sql.php';
$dates = get_Schedules();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
    <title>Document</title>

    <link rel="stylesheet" type="text/css" href="css/main.css">
</head>
<body>
    <?php require_once 'php/menu.php'?>

    <div class="container-fluit bg-white">
        <div class="row">
            <div class="col-12 mt-3 border border-dark">
            <table class=" table table-hover  shadow-lg ">
                <thead>
                    <tr>
                    <th scope="col">id</th>
                    <th scope="col">地區</th>
                    <th scope="col">內容</th>                   
                    <th scope="col">花費</th>
                    <th scope="col">訂房</th>
                    <th scope="col">交通</th>
                    <th scope="col">導遊編號</th>
                    <th scope="col">行程表</th>
                    <th scope="col">開始</th>
                    <th scope="col">結束</th>
                    
                    </tr>
                </thead>
                <tbody>
                <?php if(!empty($dates))
             foreach ($dates as $Schedules):?>
             <tr>
            <th scope="row"><?php echo $Schedules['id'] ; ?></th>
            <td><?php echo $Schedules['region'] ; ?></td>
            <td><?php echo $Schedules['content'] ; ?></td>
            <td><?php echo $Schedules['cost'] ; ?></td>
            <td><?php echo $Schedules['room'] ; ?></td>
            <td><?php echo $Schedules['traffic'] ; ?></td>
            <td><a href=""><?php echo $Schedules['guide_id'] ; ?></a> </td>
            <td><?php echo $Schedules['travel_id'] ; ?></td>
            <td><?php echo $Schedules['start'] ; ?></td>
            <td><?php echo $Schedules['end'] ; ?></td>
            </tr>
            <?php endforeach; ?>
                 </tbody>
                </table>
            </div>
        </div>
    </div>








<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
</body>
</html>