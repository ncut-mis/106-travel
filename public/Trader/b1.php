<?php
require_once 'php/db_connection.php';
require_once 'php/sql.php';

$dates = get_pass1();
/*echo "所有導遊資料"."<br>";
print_r($dates);
echo "<br>"."最後一筆導遊資料"."<br>";
$pass0 = get_pass0();
print_r($pass0);*/
$pass0 = get_pass0();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/main.css">
</head>
<body>
<?php require_once 'php/menu.php'?>

    <div class="container-fluit bg-white p-0 mt-0  xs-mt-0">
        <div class="row d-flex justify-content-center">
            <div class=" col-sm-8">
        <div class="list-group list-group-horizontal ">
             <a href="#list-one" class="list-group-item " data-toggle="list"><h4 >已審核導遊</h4></a>
             <a href="#list-two" class="list-group-item " data-toggle="list"><h4 >未審核導遊</h4></a>
             <a href="#list-three" class="list-group-item " data-toggle="list"><h4 >黑名單</h4></a>
             
         </div>
        <div class="tab-content " >

        <div class="tab-pane fade " id ="list-one">
         <table class="table table-striped text-center shadow-lg ">
             <thead>
                <tr>
                    <th scope="col">暱稱</th>
                    <th scope="col">頭貼</th>
                    <th scope="col">身分證</th>
                    <th scope="col">審核通過時間</th>
                    <th scope="col">狀態</th>
                </tr>
             </thead>
            <tbody>
            <?php if(!empty($dates))
             foreach ($dates as $guides):?>
            <tr>
            <th scope="row"><?php echo $guides['name'] ; ?></th>
            <td><img style="width:100px;height:100px" src="<?php echo $guides['photo'] ; ?>" alt=""></td>
            <td><?php echo $guides['id_card'] ; ?></td>
            <td><?php echo $guides['updated_at'] ; ?></td>
            <td><?php if($guides['pass']=="1") echo "<font color = green >已通過</font>"; else echo "<font color = red >未通過</font>"; ?></td>
            </tr>

                 <?php endforeach; ?>
             </tbody>
        </table>
        </div>

        <div class="tab-pane fade " id ="list-two">
         <table class="table table-striped text-center">
             <thead>
                <tr>
                    <th scope="col">暱稱</th>
                    <th scope="col">頭貼</th>
                    <th scope="col">身分證</th>
                    <th scope="col">創建時間</th>
                    <th scope="col">操作</th>
                </tr>
             </thead>
            <tbody>
            <?php if(!empty($pass0))
             foreach ($pass0 as $i):?>
            <tr>
            <th scope="row"><?php echo $i['name'] ; ?></th>
            <td><img style="width:100px;height:100px" src="<?php echo $i['photo'] ; ?>" alt=""></td>
            <td><?php echo $i['id_card'] ; ?></td>
            <td><?php echo $i['created_at'] ; ?></td>
            <td><a class="btn btn-outline-danger" href="b1v.php?id=<?php echo $i['id'];?>" role="button">審核</a></td>
            </tr>

                 <?php endforeach; ?>
             </tbody>
        </table>
        </div>








        </div> <!-- tab-content的div -->











        </div><!-- col的div -->
             
        </div> <!-- row的div -->

        </div>











<?php require_once 'php/footer.php'?>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
</body>

</html>