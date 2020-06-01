<?php 
require_once 'php/db_connection.php';
require_once 'php/sqlb3.php';
 $d1 =get_travels_total_year();
 $d2 = get_travels_total_month(); 
 $d3 = get_travels_total_today();
 $d4 = get_users_searchfor_member();
 $d5 =get_users_searchfor_member_month();
 $d6 =get_users_searchfor_member_today();
 $d7 = get_guides_total();
 $d8 = get_guides_total_month();
 $d9 = get_guides_total_today();
 $d10 = get_travels_order_total();
 $d11 = get_travels_order_total_month();
 $d12 = get_travels_order_total_today();
 $date5 = get_travels_order_Month($_GET['year'],$_GET['month']);
 $date6 =get_travels_total_month2($_GET['year'],$_GET['month']);

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
            <div class="col-12  col-sm-6 col-lg-3  ">
                <div class="card  h-100 ">
                    <div class="card-body ">
                        <div class="d-flex align-items-center border-bottom p-2">
                            <img src="pic/money.png" width="70" height="70" class ="img-fluid mr-3" alt="">
                            <div class="text-center w-100"> 
                                <h5><b>年度營收</b></h5>
                                <h3>$<?php if($d1['total']==null) echo 0;
                                    else echo $d1['total'] ?>
                                 </h3>
                            </div>

                        </div>

                        <div class="row d-flex  align-items-center ">
                            <div class="col-6 border-right">
                                <div class="text-center mt-2 w-100"> 
                                    <h5><b>月營收</b></h5>
                                    <h2>$<?php if($d2['total']==null) echo 0;
                                    else echo $d2['total'] ?>
                                    </h2>
                                </div>
                            </div>

                            <div class="col-6 ">
                                <div class="text-center mt-2 w-100"> 
                                    <h5><b>今日營收</b></h5>
                                    <h2>$<?php if($d3['total']==null) echo 0;
                                     else echo $d3['total'] ?>
                                    </h2>
                                </div>
                            </div>
                        </div>  

                            
                           
                    </div>
                    
                    
                </div>
            </div>

            <div class="col-12  col-sm-6 col-lg-3 ">
                <div class="card ">
                        <div class="card-body ">
                            <div class="d-flex  align-items-center border-bottom p-2">
                                <img src="pic/member.png" width="60"  class ="img-fluid mr-3 h-75 " alt="">
                                    <div class="text-center w-100"> 
                                        <h5><b>所有會員數</b></h5>
                                        <h2><?php if($d4['members_total']==null) echo 0;
                                        else echo $d4['members_total'] ?>
                                        </h2>
                                    </div>
                            </div>
                            <div class="row d-flex  align-items-center ">
                                <div class="col-6 border-right">
                                    <div class="text-center mt-2 w-100"> 
                                        <h5><b>當月會員增加</b></h5>
                                        <h2><?php if($d5['members_total']==null) echo 0;
                                        else echo $d5['members_total'] ?>
                                        </h2>
                                    </div>
                                </div>

                                <div class="col-6 ">
                                    <div class="text-center mt-2 w-100"> 
                                        <h5><b>今日會員增加</b></h5>
                                        <h2><?php if($d6['members_total']==null) echo 0;
                                        else echo $d6['members_total'] ?>
                                        </h2>
                                    </div>
                                </div>
                            </div>  
                        </div>
                </div>
            </div>

            <div class="col-12  col-sm-6 col-lg-3 ">
                <div class="card ">
                        <div class="card-body ">
                            <div class="d-flex  align-items-center border-bottom p-2">
                                <img src="pic/guide.png" width="60"  class ="img-fluid mr-3 h-75 " alt="">
                                <div class="text-center w-100"> 
                                    <h5><b>所有導遊數</b></h5>
                                    <h2><?php if($d7['guides_total']==null) echo 0;
                                    else echo $d7['guides_total'] ?>
                                    </h2>
                                </div>
                            </div>    

                            <div class="row d-flex  align-items-center ">
                                <div class="col-6 border-right">
                                    <div class="text-center mt-2 w-100"> 
                                        <h5><b>月導遊增加</b></h5>
                                        <h2><?php if($d8['guides_total']==null) echo 0;
                                        else echo $d8['guides_total'] ?>
                                        </h2>
                                    </div>
                                </div>

                                <div class="col-6 ">
                                    <div class="text-center mt-2 w-100"> 
                                        <h5><b>今日出團導遊</b></h5>
                                        <h2><?php if($d9['guides_total']==null) echo 0;
                                        else echo $d9['guides_total'] ?>
                                        </h2>
                                    </div>
                                </div>
                            </div>  
                        </div>                                               
                </div>
            </div>
            
            <div class="col-12  col-sm-6 col-lg-3 ">
                <div class="card ">
                        <div class="card-body ">
                            <div class="d-flex  align-items-center border-bottom p-2">
                                <img src="pic/order.png" width="60"  class ="img-fluid mr-3 h-75 " alt="">
                                 <div class="text-center w-100"> 
                                    <h5><b>總訂單數</b></h5>
                                    <h2><?php if($d10['travels_order_total']==null) echo 0;
                                    else echo $d10['travels_order_total'] ?>
                                    </h2>
                                </div>
                            </div>


                            <div class="row d-flex  align-items-center ">
                                <div class="col-6 border-right">
                                    <div class="text-center mt-2 w-100"> 
                                        <h5><b>月訂單數</b></h5>
                                        <h2><?php if($d11['travels_order_total']==null) echo 0;
                                        else echo $d11['travels_order_total'] ?>
                                        </h2>
                                    </div>
                                </div>

                                <div class="col-6 ">
                                    <div class="text-center mt-2 w-100"> 
                                        <h5><b>今日訂單數</b></h5>
                                        <h2><?php if($d12['travels_order_total']==null) echo 0;
                                        else echo $d12['travels_order_total'] ?>
                                        </h2>
                                    </div>
                                </div>
                            </div>  
                        </div>                                               
                </div>
            </div>
            
        
        
            

        </div>

        <div class="card mt-5">
            <div class="card-header">
                <b>營運狀態</b> 
            </div>
            <div class="card-body">
            <form action="" method="get">
                <div class="form-inline mb-1">
                    <div class="form-group">
                        <label for="year" class="mr-2">年份</label>
                            <select class="mr-2" name="year" id="">
                            <option value="<?php echo date('Y');?>"><?php echo date('Y');?>
                            <option value="<?php echo date('Y',strtotime('-1 year'));?>"><?php echo date('Y',strtotime('-1 year'));?></option>
                            <option value="<?php echo date('Y',strtotime('-2 year'));?>"><?php echo date('Y',strtotime('-2 year'));?>
                            <option value="<?php echo date('Y',strtotime('-3 year'));?>"><?php echo date('Y',strtotime('-3 year'));?>
                            <option value="<?php echo date('Y',strtotime('-4 year'));?>"><?php echo date('Y',strtotime('-4 year'));?>
                            <option value="<?php echo date('Y',strtotime('-5 year'));?>"><?php echo date('Y',strtotime('-5 year'));?>
                            
                            </select>
                        </button>
                    </div>

                    <div class="form-group">
                        <label for="month" class="mr-2">月份</label>
                            <select name="month" class="mr-3" id="">
                            <option value="">all</option>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                            <option value="6">6</option>
                            <option value="7">7</option>
                            <option value="8">8</option>
                            <option value="9">9</option>
                            <option value="10">10</option>
                            <option value="11">11</option>
                            <option value="12">12</option>
                            </select>
                        </button>
                    </div>

                    <button type="submit" class="btn btn-secondary btn-sm mr-3">送出</button>
                    <label for=""><?php if (empty($_GET['month'])) echo $_GET['year']." 1~12月"; else echo $_GET['year']."年".$_GET['month']."月" ?></label>
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
                        <th><?php echo substr($content['paytime'],0,10);?></th>
                        <td><?php echo $content['訂單數'];?></td>
                        <td>$<?php echo $content['營業額'];?></td>
                        <td class="text-right">$<?php echo $content['淨利率'];?></td>
                        </tbody>
                    <?php endforeach;?>
                    
                    <tfoot class="text-right">
                        <tr>
                            <td colspan="3" class="text-right font-weight-bold">總營業額</td>
                            <td>$<?php if($date6['營業額']==null) echo 0;
                                    else echo $date6['營業額'] ?></td>
                        </tr>
                        <tr>
                            <td colspan="3" class="text-right font-weight-bold">總淨利率</td>
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