<?php
require_once 'php/db_connection.php';
require_once 'php/sqlb4.php';
$r1 = r1($_GET['date']);
$r2 = r2($_GET['date']);
$r3 = r3($_GET['date']);
$r4 = r4($_GET['date']);
$r5 = r5($_GET['date']);
$r6 = r6($_GET['date']);
$r7 = r7($_GET['date']);
$r8 = r8($_GET['date']);
$r9 = r9($_GET['date']);
$r10 = r10($_GET['date']);
$r11= r11($_GET['date']);
$r12= r12($_GET['date']);
$r13= r13($_GET['date']);
$r14= r14($_GET['date']);
$r15 = r15($_GET['date']);
$r16 = r16($_GET['date']);
$r17 = r17($_GET['date']);
$r18 = r18($_GET['date']);
$r19 = r19($_GET['date']);
$r20 = r20($_GET['date']);
$g1 =g1($_GET['date']);
$g2 =g2($_GET['date']);
$g3 =g3($_GET['date']);
$g4 =g4($_GET['date']);
$g5 =g5($_GET['date']);
$g6 =g6($_GET['date']);
$g7 =g7($_GET['date']);
$g8 =g8($_GET['date']);
$g9 =g9($_GET['date']);
$g10 =g10($_GET['date']);
$g11 =g11($_GET['date']);
$g12 =g12($_GET['date']);
$g13 =g13($_GET['date']);
$g14 =g14($_GET['date']);
$g15 =g15($_GET['date']);
$g16 =g16($_GET['date']);
$g17 =g17($_GET['date']);
$g18 =g18($_GET['date']);
$g19 =g19($_GET['date']);
$g20 =g20($_GET['date']);
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

    <div class="container p-0 bg-white">
        <div class="row">
        <!--
            <div class="col-12">
                <div class="dropdown dropright ">
                <button class="btn btn-secondary dropdown-toggle btn-lg dropright" type="button" id="dropdown1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    導遊所在的縣市
                </button>
                <div class="dropdown-menu" style="height:300px; overflow-y: scroll;"  aria-labelledby="dropdown1">
                    <a class="dropdown-item" href="">基隆</a>
                    <a class="dropdown-item" href="">台北</a>
                    <a class="dropdown-item" href="">新北</a>
                    <a class="dropdown-item" href="#">桃園</a>
                    <a class="dropdown-item" href="#">新竹</a>
                    <a class="dropdown-item" href="#">苗栗</a>
                    <a class="dropdown-item" href="#">台中</a>
                    <a class="dropdown-item" href="#">彰化</a>
                    <a class="dropdown-item" href="#">南投</a>
                    <a class="dropdown-item" href="#">雲林</a>
                    <a class="dropdown-item" href="#">嘉義</a>
                    <a class="dropdown-item" href="#">台南</a>
                    <a class="dropdown-item" href="#">高雄</a>
                    <a class="dropdown-item" href="#">屏東</a>
                    <a class="dropdown-item" href="#">台東</a>
                    <a class="dropdown-item" href="#">花蓮</a>
                    <a class="dropdown-item" href="#">宜蘭</a>
                    <a class="dropdown-item" href="#">澎湖</a>
                    <a class="dropdown-item" href="#">金門</a>
                    <a class="dropdown-item" href="#">連江</a>

                </div>
                </div>
            </div>-->
<div class="col-12">
                    <div class="dropdown">
        <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            日期
        </button>
        <div class="dropdown-menu" id="date" aria-labelledby="dropdownMenuButton">
            <a class="dropdown-item" href="#"><?php echo date("Y/m/d");?></a>
            <a class="dropdown-item" href="#"><?php echo date("Y/m/d", strtotime('+1 day'));?></a>
            <a class="dropdown-item" href="#"><?php echo date("Y/m/d", strtotime('+2 day'));?></a>
            <a class="dropdown-item" href="#"><?php echo date("Y/m/d", strtotime('+3 day'));?></a>
            <a class="dropdown-item" href="#"><?php echo date("Y/m/d", strtotime('+4 day'));?></a>
            <a class="dropdown-item" href="#"><?php echo date("Y/m/d", strtotime('+5 day'));?></a>
            <a class="dropdown-item" href="#"><?php echo date("Y/m/d", strtotime('+6 day'));?></a>
        </div>
        </div>
</div>

            <div class=" col-12 ">
                <table class ="table table-hover  shadow-lg">
                    <thead>
                    <th scope="col">縣市</th>
                    <th scope="col">出團數</th>
                    <th scope="col">已出團導遊</th>
                    </thead>
                
                    <tbody>
                        <tr>
                            <th scope="row">基隆</th>
                            <td><a href="b4a.php?date=<?php echo $_GET['date']?>&region=基隆"><?php echo $r1['r']?></a></td>
                            <td><a href="b4b.php?date=<?php echo $_GET['date']?>&region=基隆"><?php echo $g1['g']?></a></td>
                            
                        </tr>
                        <tr>
                            <th scope="row">台北</th>
                            <td><a href="b4a.php?date=<?php echo $_GET['date']?>&region=台北"><?php echo $r2['r']?></a></td>
                            <td><a href="b4b.php?date=<?php echo $_GET['date']?>&region=台北"><?php echo $g2['g']?></a></td>
                        </tr>
                        <tr>
                            <th scope="row">新北</th>
                            <td><a href="b4a.php?date=<?php echo $_GET['date']?>&region=新北"><?php echo $r3['r']?></a></td>
                            <td><a href="b4b.php?date=<?php echo $_GET['date']?>&region=新北"><?php echo $g3['g']?></a></td>
                        </tr>
                        <tr>
         
                            <th scope="row">桃園</th>
                            <td><a href="b4a.php?date=<?php echo $_GET['date']?>&region=桃園"><?php echo $r4['r']?></a></td>
                            <td><a href="b4b.php?date=<?php echo $_GET['date']?>&region=桃園"><?php echo $g4['g']?></a></td>
                        </tr>
                        <tr>
         
                            <th scope="row">新竹</th>
                            <td><a href="b4a.php?date=<?php echo $_GET['date']?>&region=新竹"><?php echo $r5['r']?></a></td>
                            <td><a href="b4b.php?date=<?php echo $_GET['date']?>&region=新竹"><?php echo $g5['g']?></a></td>
                        </tr>
                        <tr>
         
                            <th scope="row">苗栗</th>
                            <td><a href="b4a.php?date=<?php echo $_GET['date']?>&region=苗栗"><?php echo $r6['r']?></a></td>
                            <td><a href="b4b.php?date=<?php echo $_GET['date']?>&region=苗栗"><?php echo $g6['g']?></a></td>
                        </tr>
                        <tr>
         
                            <th scope="row">台中</th>
                            <td><a href="b4a.php?date=<?php echo $_GET['date']?>&region=台中"><?php echo $r7['r']?></a></td>
                            <td><a href="b4b.php?date=<?php echo $_GET['date']?>&region=台中"><?php echo $g7['g']?></a></td>
                        </tr>
                        <tr>
         
                            <th scope="row">彰化</th>
                            <td><a href="b4a.php?date=<?php echo $_GET['date']?>&region=彰化"><?php echo $r8['r']?></a></td>
                            <td><a href="b4b.php?date=<?php echo $_GET['date']?>&region=彰化"><?php echo $g8['g']?></a></td>
                        </tr>
                        <tr>
         
                            <th scope="row">南投</th>
                            <td><a href="b4a.php?date=<?php echo $_GET['date']?>&region=南投"><?php echo $r9['r']?></a></td>
                            <td><a href="b4b.php?date=<?php echo $_GET['date']?>&region=南投"><?php echo $g9['g']?></a></td>
                        </tr>
                        <tr>
         
                            <th scope="row">雲林</th>
                            <td><a href="b4a.php?date=<?php echo $_GET['date']?>&region=雲林"><?php echo $r10['r']?></a></td>
                            <td><a href="b4b.php?date=<?php echo $_GET['date']?>&region=雲林"><?php echo $g10['g']?></a></td>
                        </tr>
                        <tr>
         
                            <th scope="row">嘉義</th>
                            <td><a href="b4a.php?date=<?php echo $_GET['date']?>&region=嘉義"><?php echo $r11['r']?></a></td>
                            <td><a href="b4b.php?date=<?php echo $_GET['date']?>&region=嘉義"><?php echo $g11['g']?></a></td>
                        </tr>
                        <tr>
         
                            <th scope="row">台南</th>
                            <td><a href="b4a.php?date=<?php echo $_GET['date']?>&region=台南"><?php echo $r12['r']?></a></td>
                            <td><a href="b4b.php?date=<?php echo $_GET['date']?>&region=台南"><?php echo $g12['g']?></a></td>
                        </tr>
                        <tr>
         
                            <th scope="row">高雄</th>
                            <td><a href="b4a.php?date=<?php echo $_GET['date']?>&region=高雄"><?php echo $r13['r']?></a></td>
                            <td><a href="b4b.php?date=<?php echo $_GET['date']?>&region=高雄"><?php echo $g13['g']?></a></td>
                        </tr>
                        <tr>
         
                            <th scope="row">屏東</th>
                            <td><a href="b4a.php?date=<?php echo $_GET['date']?>&region=屏東"><?php echo $r14['r']?></a></td>
                            <td><a href="b4b.php?date=<?php echo $_GET['date']?>&region=屏東"><?php echo $g14['g']?></a></td>
                        </tr>
                        <tr>
         
                            <th scope="row">台東</th>
                            <td><a href="b4a.php?date=<?php echo $_GET['date']?>&region=台東"><?php echo $r15['r']?></a></td>
                            <td><a href="b4b.php?date=<?php echo $_GET['date']?>&region=台東"><?php echo $g15['g']?></a></td>
                        </tr>
                        <tr>
         
                            <th scope="row">花蓮</th>
                            <td><a href="b4a.php?date=<?php echo $_GET['date']?>&region=花蓮"><?php echo $r16['r']?></a></td>
                            <td><a href="b4b.php?date=<?php echo $_GET['date']?>&region=花蓮"><?php echo $g16['g']?></a></td>
                        </tr>
                        <tr>
         
                            <th scope="row">宜蘭</th>
                            <td><a href="b4a.php?date=<?php echo $_GET['date']?>&region=宜蘭"><?php echo $r17['r']?></a></td>
                            <td><a href="b4b.php?date=<?php echo $_GET['date']?>&region=宜蘭"><?php echo $g17['g']?></a></td>
                        </tr>
                        <tr>
         
                            <th scope="row">澎湖</th>
                            <td><a href="b4a.php?date=<?php echo $_GET['date']?>&region=澎湖"><?php echo $r18['r']?></a></td>
                            <td><a href="b4b.php?date=<?php echo $_GET['date']?>&region=澎湖"><?php echo $g18['g']?></a></td>
                        </tr>
                        <tr>
         
                            <th scope="row">金門</th>
                            <td><a href="b4a.php?date=<?php echo $_GET['date']?>&region=金門"><?php echo $r19['r']?></a></td>
                            <td><a href="b4b.php?date=<?php echo $_GET['date']?>&region=金門"><?php echo $g19['g']?></a></td>
                        </tr>
                        <tr>
         
                            <th scope="row">連江</th>
                            <td><a href="b4a.php?date=<?php echo $_GET['date']?>&region=連江"><?php echo $r20['r']?></a></td>
                            <td><a href="b4b.php?date=<?php echo $_GET['date']?>&region=連江"><?php echo $g20['g']?></a></td>
                        </tr>
                    </tbody>
         
                </table>
            </div>

           <!--
            
            <div class="col-12">
           
                <table class=" table table-hover  shadow-lg ">
                    <thead>
                        <tr>
                        <th scope="col">導遊id</th>
                        <th scope="col">地區</th>
                        <th scope="col">內容</th>                   
                        <th scope="col">花費</th>
                        <th scope="col">訂房</th>
                        <th scope="col">交通</th>
                        <th scope="col">開始</th>
                        <th scope="col">結束</th>

                        
                        </tr>
                    </thead>
                    <tbody>
                    <?php /*if(!empty($dates))
                foreach ($dates as $Schedules):?>
                <tr>
                <th scope="row"><a id="get_guide" href="#&id=<?php echo $Schedules['guide_id'] ; ?>"><?php echo $Schedules['guide_id'] ; ?></a></th>
                <td><?php echo $Schedules['region'] ; ?></td>
                <td><?php echo $Schedules['content'] ; ?></td>
                <td><?php echo $Schedules['cost'] ; ?></td>
                <td><?php echo $Schedules['room'] ; ?></td>
                <td><?php echo $Schedules['traffic'] ; ?></td>
                <td><?php echo $Schedules['start'] ; ?></td>
                <td><?php echo $Schedules['end'] ; ?></td>
                


                </td>
                </tr>
                <?php endforeach; */?>
                    </tbody>
                </table>
            </div><-->





        
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