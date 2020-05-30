<?php
require_once 'php/db_connection.php';
require_once 'php/sql.php';
$dates = get_schedules($_GET['travel_id']);
//$URL='http://'.$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];//當前網址

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
    <title>Document</title>
    <script src="js/jquery-3.5.1.min.js"></script>

    <link rel="stylesheet" type="text/css" href="css/main.css">
</head>
<body>
    <?php require_once 'php/menu.php'?>
    
    <div class="container-fluit bg-white">
        <div class="row">
            <div class="col-12 mt-3 border border-dark ">
            <table class=" table table-hover  shadow-lg  ">
                <thead>
                    <tr>
                    <th scope="col">地區</th>
                    <th scope="col">開始時間</th>
                    <th scope="col">結束時間</th>
                    <th scope="col">內容</th>
                    <th scope="col">交通</th>
                    <th scope="col">花費</th>
                    <th scope="col">帶團導遊</th>
                    </tr>
                </thead>
                <tbody >
                <?php if(!empty($dates))
                  foreach ($dates as $schedules):?>
                  <tr >
                  <th scope="row"><?php echo $schedules['region'] ; ?></th>
                  <td><?php echo $schedules['start'] ; ?></td>
                  <td><?php echo $schedules['end'] ; ?></td>
                  <td><?php echo $schedules['content'];?></td>                 
                  <td><?php echo $schedules['traffic'];?></td>
                  <td><?php echo $schedules['cost'];?></td>
                  <td><a data-photo="<?php echo $schedules['photo'];?>" data-guide ="<?php echo $schedules['name'];?>" data-phone ="<?php echo $schedules['phone'];?>" data-email ="<?php echo $schedules['email'];?>"   data-toggle="modal" data-target="#exampleModal" href=""><?php echo $schedules['name'];?></a></td>
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
      <div class="modal-header   ">
        <img src="" id ="top" alt="" class="img-fluid" width="85" >
        <div class="ml-auto">
        <h5 class="modal-title " id="exampleModalLabel">Modal title</h5>
       
        </div>
        
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        ...
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">關閉</button>
        
      </div>
    </div>
  </div>
</div>

<script >


$(document).ready(function () {

  $('#exampleModal').on('show.bs.modal', function (event) {
      var button = $(event.relatedTarget) 
      var recipient = button.data('guide') 
      var phone = button.data('phone') 
      var email = button.data('email') 
      var photo = button.data('photo') 
      var modal = $(this)
      modal.find('.modal-title').text("導遊名稱 :"+recipient)
      modal.find('#top').attr("src",photo)
      modal.find('.modal-body').text("聯絡電話 : "+ phone)
      modal.find('.modal-body').append("<br>"+"電子信箱 : "+email+'<br>')
     // modal.find('.modal-body input').text(recipient)
  })


});

</script>



       


<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
</body>
</html>