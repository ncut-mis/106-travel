<?php
require_once 'php/db_connection.php';
require_once 'php/sql.php';
$guides = get_guides();
$dates = get_pass1();
/*echo "所有導遊資料"."<br>";
print_r($dates);
echo "<br>"."最後一筆導遊資料"."<br>";
$pass0 = get_pass0();
print_r($pass0);*/
$pass0 = get_pass0();
$date2 = get_pass1or2();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="js/jquery-3.5.1.min.js"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/main.css">
</head>
<body>
<?php require_once 'php/menu.php'?>

    <div class="container-fluit bg-white p-0 mt-0  xs-mt-0">
        <div class="row d-flex justify-content-center">
            <div class=" col-sm-8">
        <div class="list-group list-group-horizontal ">
             <a href="#list-one" class="list-group-item active " data-toggle="list"><h4 >已審核導遊</h4></a>
             <a href="#list-two" class="list-group-item " data-toggle="list"><h4 >未審核導遊</h4></a>
             <a href="#list-three" class="list-group-item " data-toggle="list"><h4 >黑名單</h4></a>
             
         </div>
        <div class="tab-content " >

        <div class="tab-pane fade show active" id ="list-one">
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
            <?php if(!empty($date2))
             foreach ($date2 as $guides):?>
            <tr>
            <th scope="row"><?php echo $guides['name'] ; ?></th>
            <td><img style="width:100px;height:100px" src="<?php echo $guides['photo'] ; ?>" alt=""></td>
            <td><?php echo $guides['id_card'] ; ?></td>
            <td><?php echo $guides['pass_time'] ; ?></td>
            <td><?php if($guides['pass']=="1") echo "<font color = green >已通過</font>"; else if($guides['pass']=="2") echo "<font color = red >黑名單</font>"; ?></td>
            </tr>

                 <?php endforeach; ?>
             </tbody>
        </table>
        </div>

        <div class="tab-pane fade " id ="list-two">
         <table class="table table-striped text-center shadow-lg">
             <thead>
                <tr>
                    <th scope="col">暱稱</th>
                    <th scope="col">姓別</th>
                    <th scope="col">出生日期</th>
                    <th scope="col">電話</th>
                    <th scope="col">email</th>
                    <th scope="col">操作</th>
                </tr>
             </thead>
            <tbody>
            <?php if(!empty($pass0))
             foreach ($pass0 as $i):?>
            <tr>
            <th scope="row"><?php echo $i['name'] ; ?></th>
            <td><?php echo $i['sex'] ; ?></td>
            <td><?php echo substr($i['birthday'],0,10); ?></td>
            <td><?php echo $i['phone'] ; ?></td>
            <td><?php echo $i['email'] ; ?></td>
            <td><a class="btn btn-outline-danger" href="b1v.php?user_id=<?php echo $i['user_id'];?>" role="button">審核</a></td>
            </tr>

                 <?php endforeach; ?>
             </tbody>
        </table>
        </div>


        <div class="tab-pane fade " id ="list-three">
         <table class="table table-striped text-center shadow-lg ">
             <thead>
                <tr>
                    <th scope="col">暱稱</th>
                    <th scope="col">頭貼</th>
                    <th scope="col">身分證</th>
                    <th scope="col">審核通過時間</th>
                    <th scope="col">操作</th>
                </tr>
             </thead>
            <tbody>
            <?php if(!empty($dates))
             foreach ($dates as $guides):?>
            <tr>
            <th scope="row"><?php echo $guides['name'] ; ?></th>
            <td><img style="width:100px;height:100px" src="<?php echo $guides['photo'] ; ?>" alt=""></td>
            <td><?php echo $guides['id_card'] ; ?></td>
            <td><?php echo $guides['pass_time'] ; ?></td>
            <td>
            <form action="POST">
            <div class="">
            <button type="button" class="btn btn-outline-dark" data-id="<?php echo $guides['id']?>" data-name="<?php echo $guides['name']?>" data-toggle="modal" data-target="#exampleModal">黑名單</button>
            </div>
            
            </form>
            </td>
            </tr>

                 <?php endforeach; ?>
             </tbody>
        </table>
        </div>






        </div> <!-- tab-content的div -->











        </div><!-- col的div -->
             
        </div> <!-- row的div -->

        </div>




    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
            <div class="modal-header bg-danger">
                <h5 class="modal-title  text-white" id="exampleModalLabel">Modal title</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                此導遊將不隸屬於本公司
            </div>
            <form id="check" action="" method="POST">
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary" data-dismiss="modal">關閉</button>
                    <button type="submit" name="check" value="yes" class="btn btn-outline-danger">確定</button>
                </div>
            </form>
            </div>
        </div>
    </div>


<script>
 $(document).ready(function () {
    $('#exampleModal').on('show.bs.modal', function (event) {
  var button = $(event.relatedTarget) 
  var name = button.data('name') 
  var id = button.data('id') 
  var modal = $(this)
  modal.find('.modal-title').text("確定要把'"+name+"'導遊加入黑名單嗎?")
  modal.find('#check').attr("action","php/blacklist.php?id="+id)
})
 });
</script>



<?php require_once 'php/footer.php'?>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
</body>

</html>