<?php
require_once 'php/db_connection.php';
require_once 'php/sql.php';
$dates = region($_GET['region']);
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

    <div class="container-fluit bg-white">
        <div class="row">
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
            </div>

            <script type="text/javascript">
                $(document).ready(function () {
                   var i = $('.dropdown-menu  a').click(function () { 
                        var text = $(this).text();
                        $(".dropdown-menu  a").attr("href","?region="+text);

                    });

                    $('table #get_guide').click(function () { 
                       
                        
                        
                    });

                });

               
            </script>
            
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
                        <th scope="col">地圖</th>
                        
                        </tr>
                    </thead>
                    <tbody>
                    <?php if(!empty($dates))
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
                <td><a href="http://www.google.com.tw/maps/search/<?php echo $Schedules['region'] ; ?>" target="_blank"><img width ="50" height="50" src="pic/google.jpg" alt="圖片壞了"></a></td>
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