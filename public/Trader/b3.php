<?php 
require_once 'php/db_connection.php';
require_once 'php/sql.php';
 $date1 = get_travels_total();
 $date2 = get_users_searchfor_member();
 $date3 = get_guides_total();
 $date4 = get_travels_order_total();
 $date5 = get_travels_order_Month($_GET['paytime']);
 $date6 =get_travels_total_month($_GET['paytime']);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="css/main.css">
    <script src="js/jquery-3.5.1.min.js"></script>
</head>
<body>
    <?php require_once 'php/menu.php';?>
    
    <div class="container-fluit mx-4 mt-3">
        <div class="row">
            <div class="col-12  col-sm-6 col-lg-3 ">
                <div class="card  h-100">
                     <div class="card-body d-flex align-items-center">
                        <img src="pic/money.png" width="70" height="70" class ="img-fluid mr-3" alt="">
                            <div class="text-center w-100"> 
                                <h5><b>今日營收</b></h5>
                                <h3>$<?php if($date1['total']==null) echo 0;
                                    else echo $date1['total'] ?>
                                 </h3>
                            </div>
                           
                     </div>
                    
                    
                </div>
            </div>
            <div class="col-12  col-sm-6 col-lg-3 ">
                <div class="card  ">
                        <div class="card-body d-flex  align-items-center">
                            <img src="pic/member.png" width="60"  class ="img-fluid mr-3 h-75 " alt="">
                                <div class="text-center w-100"> 
                                    <h5><b>所有會員數</b></h5>
                                    <h2><?php if($date2['members_total']==null) echo 0;
                                    else echo $date2['members_total'] ?>
                                    </h2>
                                </div>
                            
                        </div>
                        
                        
                    </div>
            </div>
            <div class="col-12  col-sm-6 col-lg-3 ">
                <div class="card ">
                        <div class="card-body d-flex  align-items-center">
                            <img src="pic/guide.png" width="60"  class ="img-fluid mr-3 h-75 " alt="">
                                <div class="text-center w-100"> 
                                    <h5><b>所有導遊數</b></h5>
                                    <h2><?php if($date3['guides_total']==null) echo 0;
                                    else echo $date3['guides_total'] ?>
                                    </h2>
                                </div>
                        </div>                                               
                </div>
            </div>
            
            <div class="col-12  col-sm-6 col-lg-3 ">
                <div class="card ">
                        <div class="card-body d-flex  align-items-center">
                            <img src="pic/order.png" width="60"  class ="img-fluid mr-3 h-75 " alt="">
                                 <div class="text-center w-100"> 
                                    <h5><b>訂單進行數</b></h5>
                                    <h2><?php if($date4['travels_order_total']==null) echo 0;
                                    else echo $date4['travels_order_total'] ?>
                                    </h2>
                                </div>
                        </div>                                               
                </div>
            </div>
            
            <div class="col-12  col-sm-6 col-lg-3 mt-2">
                <div class="card ">
                        <div class="card-body d-flex  align-items-center">
                            <img src="pic/money.png" width="60"  class ="img-fluid mr-3 h-75 " alt="">
                                 <div class="text-center w-100"> 
                                    <h5><b>年度營收</b></h5>
                                    <h2><?php if($date4['travels_order_total']==null) echo 0;
                                    else echo $date4['travels_order_total'] ?>
                                    </h2>
                                </div>
                        </div>                                               
                </div>
            </div>

            <div class="col-12  col-sm-6 col-lg-3 mt-2">
                <div class="card ">
                        <div class="card-body d-flex  align-items-center">
                            <img src="pic/member.png" width="60"  class ="img-fluid mr-3 h-75 " alt="">
                                 <div class="text-center w-100"> 
                                    <h5><b>1</b></h5>
                                    <h2><?php if($date4['travels_order_total']==null) echo 0;
                                    else echo $date4['travels_order_total'] ?>
                                    </h2>
                                </div>
                        </div>                                               
                </div>
            </div>

            <div class="col-12  col-sm-6 col-lg-3 mt-2">
                <div class="card ">
                        <div class="card-body d-flex  align-items-center">
                            <img src="pic/guide.png" width="60"  class ="img-fluid mr-3 h-75 " alt="">
                                 <div class="text-center w-100"> 
                                    <h5><b>2</b></h5>
                                    <h2><?php if($date4['travels_order_total']==null) echo 0;
                                    else echo $date4['travels_order_total'] ?>
                                    </h2>
                                </div>
                        </div>                                               
                </div>
            </div>
            
            <div class="col-12  col-sm-6 col-lg-3 mt-2">
                <div class="card ">
                        <div class="card-body d-flex  align-items-center">
                            <img src="pic/order.png" width="60"  class ="img-fluid mr-3 h-75 " alt="">
                                 <div class="text-center w-100"> 
                                    <h5><b>所有訂單數</b></h5>
                                    <h2><?php if($date4['travels_order_total']==null) echo 0;
                                    else echo $date4['travels_order_total'] ?>
                                    </h2>
                                </div>
                        </div>                                               
                </div>
            </div>
        
            

        </div>

        <div class="card mt-5">
            <div class="card-header">
                <b>月營運狀態</b> 
            </div>
            <div class="card-body">
            <form action="">
                <div class="form-inline mb-1">
                    <div class="form-group">
                        <label for="month" class="sr-only">月份</label>
                                    <div class="btn-group">
                                    <button type="button" class="btn  dropdown-toggle btn-sm  btn-outline-secondary dropright" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    月份
                                    </button>
                                    <div class="dropdown-menu" id="month">
                                        <a class="dropdown-item" href="#">1</a>
                                        <a class="dropdown-item" href="#">2</a>
                                        <a class="dropdown-item" href="#">3</a>
                                        <a class="dropdown-item" href="#">4</a>
                                        <a class="dropdown-item" href="#">5</a>
                                        <a class="dropdown-item" href="#">6</a>
                                        <a class="dropdown-item" href="#">7</a>
                                        <a class="dropdown-item" href="#">8</a>
                                        <a class="dropdown-item" href="#">9</a>
                                        <a class="dropdown-item" href="#">10</a>
                                        <a class="dropdown-item" href="#">11</a>
                                        <a class="dropdown-item" href="#">12</a>
                                    </div>
                                    </div>
                        </button>
                    </div>
                    <!--<div class="ml-auto">
                        <button type="button" class="btn btn-outline-secondary">導遊增加狀態</button>
                        <button type="button" class="btn btn-outline-secondary">會員增加狀態</button>
                    </div><-->
                </div>
            </form>

                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">日期</th>
                            <th scope="col">訂單數</th>
                            <th scope="col">營業額</th>
                            <th scope="col" class="text-right">淨利率</th>
                        </tr>
                    </thead>
                    
                    <?php foreach ($date5 as $content):?>
                        <tbody>
                        <th><?php echo substr($content['paytime'],5,5);?></th>
                        <td><?php echo $content['訂單數'];?></td>
                        <td>$<?php echo $content['營業額'];?></td>
                        <td class="text-right">$<?php echo $content['淨利率'];?></td>
                        </tbody>
                    <?php endforeach;?>
                    
                    <tfoot class="text-right">
                        <tr>
                            <td colspan="3" class="text-right font-weight-bold">月總營業額</td>
                            <td>$<?php if($date6['營業額']==null) echo 0;
                                    else echo $date6['營業額'] ?></td>
                        </tr>
                        <tr>
                            <td colspan="3" class="text-right font-weight-bold">月總淨利率</td>
                            <td>$<?php if($date6['淨利率']==null) echo 0;
                                    else echo $date6['淨利率'] ?></td>
                        </tr>
                    </tfoot>
                </table>
                
                
                
            </div>
        </div>



    </div>

<div id ="t"></div>



<script type="text/javascript">
    $(document).ready(function () {
$(selector).text(textString);
        $('#month a').click(function (e) { 
            var i = $(this).text();
            //$(location).attr('href',"?paytime="+i);
            $(this).attr("href","?paytime="+i);
        });
        $('#month ').change(function (i) { 
           
         
        });
        $("#month option[value="+i+"]").attr('selected', true);

        
    });
   // $("#month option[value="+<?php  $_GET['paytime'];?>+"]").attr('selected', true);
    
</script>




<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
</body>
</html>