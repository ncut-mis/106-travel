<?php
require_once 'php/db_connection.php';
require_once 'php/sql.php';
$dates1 = show_guides($_GET['user_id']);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>第<?php echo $_GET['user_id'];?>位導遊資訊</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/main.css">
</head>
<body>
<?php require_once 'php/menu.php'?>

<?php foreach($dates1 as $guide): endforeach;?>

    <div class="container-fluit">
        <div class="row d-flex justify-content-center ">
            <div class=" col-10 col-xs-12">
        <div class="list-group list-group-horizontal ">
             <a href="#list-one" class="list-group-item  " data-toggle="list"><h3>基本資料</h3></a>
             <a href="#list-two" class="list-group-item  " data-toggle="list"><h3>帶團經驗</h3></a>
         </div>
        <div class="tab-content" >

        <div class="tab-pane fade " id ="list-one">
        <div class="card">
        <h5 class="card-header">(<?php echo $_GET['user_id'];?>號導遊)</h5>
            <div class="card-body">
                <div class="row  justify-content-center ">
                        <img width="125"  class="img-fluid rounded-circle justify-item-center" src="<?php echo  $guide['photo'];?>" alt="">
                       
                </div> 
                    <div class="row d-flex justify-content-center mt-2"><h4><?php echo $guide['name'];?></h4></div><hr>
                
                <div class="row   m-0">
                    <div class="col-12 col-sm-7 mt-4" >
                         <h4 class="text-dark">基本資料</h4><br>
                         <h5 class="card p-2" >
                            <?php
                                echo "性別 : ".$guide['sex']."<br><br>"
                                ."出生日期 : ".substr($guide['birthday'],0,10) ."<br><br>"
                                ."電話號碼 : ".$guide['phone'] ."<br><br>"
                                ."身分證 : ".$guide['id_card'] ."<br><br>"
                                ."電子郵件 : ".$guide['email'] ."<br><br>"
                                ;
                            ?>
                        </h5>
                        <h4 class="text-muted ">應徵動機</h4>
                        <h5 class="card p-2">
                               <?php echo $guide['motive'] ;?>
                        </h5>           
                    
                    
                    </div>
                    <div class="col-12 col-sm-5">
                       
                            
                              
                                
                                <img class="img-fluit h-75" width="500" src="<?php echo $guide['license'] ;?>" alt="此位導遊沒放證照"></td>
                               
                            
                    </div>
                         
                </div>
        </div>
            
        </div>

        




        </div><!-- col的div -->



        <div class="tab-pane fade " id ="list-two">
            
            <div class="card">
            
                <div class="card-body ">
                    <div class="row">
                        <?php if(!empty($dates1))
                        foreach($dates1 as $article):
                                if(!empty($article['image'])){?>
                                <div class="col-sm-6 mt-2">
                                        <div class="card-header bg-white text-center"><h4><?php echo $article['image_title']?></h4></div>
                                        <img class="img-fluit w-100" width="" src="<?php echo $article['image']?>" alt="">
                                </div>
                                <div class="col-sm-6 mt-sm-5">
                                    <h5><?php echo $article['image_content']?></h5>
                                </div>
                                <?php }?>

                                <?php if(!empty($article['video'])){?>
                                <div class="col-sm-6">
                                    <div class="card-header bg-white text-center"><h4><?php echo $article['video_title']?></h4></div>
                                    <h5><?php echo $article['video_content']?></h5>
                                </div>
                                <div class="col-sm-6 mt-sm-5">
                                    <div class="embed-responsive embed-responsive-16by9">
                                        <?php echo $article['video']?>
                                    </div> 
                                </div><?php }?>
                            
                        <?php endforeach?>
                     </div>
                     <form method ="post" action="php/pass_or_nopass.php?user_id=<?php echo $_GET['user_id']?>">
                    <div class="mt-5 row d-flex justify-content-around">
                    <button type="submit" name="check" value="pass" class="btn btn-success pull-right">審核通過</button>
                    <button type="submit" name="check" value="nopass" class="btn btn-danger pull-left">審核不通過</button>
                    </div>
                    
        </form>

                  </div>

            </div><!-- card的div -->
            
        </div><!-- tab-pane2的div -->





        </div><!-- tab-content的div -->

            
        

        
        
        






         </div>
    </div>



    
        





<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
</body>

</html>