<?php
require_once 'php/db_connection.php';
require_once 'php/sql.php';
$dates = get_travels();

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
            <table class=" table table-hover  shadow-lg text-center ">
                <thead>
                    <tr>
                    <th scope="col">名稱</th>
                    <th scope="col">開始時間</th>
                    <th scope="col">結束時間</th>
                    <th scope="col">總金額</th>
                    <th scope="col">付款日期</th>
                    <th scope="col">查看詳細資料</th>
                    </tr>
                </thead>
                <tbody>
                <?php if(!empty($dates))
             foreach ($dates as $travels):?>
             <tr>
            <th scope="row"><?php echo $travels['name'] ; ?></th>
            <td><?php echo $travels['start'] ; ?></td>
            <td><?php echo $travels['end'] ; ?></td>
            <td><?php echo $travels['total'] ; ?></td>
            <td><?php echo $travels['paytime'] ; ?></td>
            <td><a href="b2a.php?travel_id=<?php echo $travels['member_id'] ; ?>"><img src="pic/magnifier.png" width="50" height = "50" alt=""></a></td>
            </tr>
            <?php endforeach; ?>
                 </tbody>
                </table>
            </div>
        </div>
    </div>

    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        ...
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>

<script >



</script>



       


<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
</body>
</html>