<?php
require_once 'php/db_connection.php';
require_once 'php/sqlb4.php';
$ga = ga($_GET['date'],$_GET['region']);
//$guidesdates = show_guides($_GET['id']);
//$dates =get_Schedules();
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
    <div class="container bg-white p-0">
        <div class="row">
            <div class=" col-12 ">
                <table class ="table table-hover  shadow-lg">
                    <thead>
                    <th scope="col">導遊暱稱</th>
                    <th scope="col">聯絡電話</th>
                    <th scope="col">信箱</th>
                    <th scope="col">出發地點</th>
                    <th scope="col">結束地點</th>
                    <th scope="col">travel_id</th>
                    </thead>
                    <tbody>
                    <?php if(!empty($ga))
                        foreach ($ga as $Schedules):?>
                        <tr>
                        <th scope="row"><?php echo $Schedules['name'] ; ?></th>
                        <td><?php echo $Schedules['phone'] ; ?></td>
                        <td><?php echo $Schedules['email'] ; ?></td>
                        <td><?php echo $Schedules['going'] ; ?></td>
                        <td><?php echo $Schedules['arriving'] ; ?></td>
                        <td><?php echo $Schedules['travel_id'] ; ?></td>
                        </td>
                        </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    


            

          




        
        </div>
        
    </div>



<!-- Modal -->
<div class="modal fade" id="googlemapModal" tabindex="-1" role="dialog" aria-labelledby="googlemapModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d56598.708898523226!2d120.70294780760396!3d24.134056669347725!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x123d10408eea9124!2z6YiK6Kqg5pW45L2N6KGM6Yq3KOiCoSnlhazlj7ggfCBHb29nbGXmlbTlkIjooYzpirfpoJjlsI7lsIjlrrY!5e0!3m2!1szh-TW!2stw!4v1589990635894!5m2!1szh-TW!2stw" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>






<script type="text/javascript">

                $(document).ready(function () {
                   var i = $('#date  a').click(function () { 
                        var text = $(this).text();
                        
                        $(".dropdown-menu  a").attr("href","?date="+text);
                       /* $.ajax({
                            type: "GET",
                            url: "php/b4_dropdown.php",
                            data: '',
                            dataType: 'html',
                            error:function(){alert('Ajax request 發生錯誤');},
                            success: function(res){alert('Ajax success!');}
                           
                            
                        });*/
                    });

                    $('#googlemapModal').on('show.bs.modal', function (event) {
                        var button = $(event.relatedTarget) 
                        var recipient = button.data('title') 
                        //var t = button.data("content")
                        
                        var modal = $(this)
                        modal.find('.modal-title').text(recipient)
                        //modal.find('.modal-body').text("<iframe"+t+"</iframe>")
                    })

                });

               
            </script>


<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
</body>
</html>