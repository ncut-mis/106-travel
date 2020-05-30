<?php
require_once 'php/db_connection.php';
require_once 'php/sql.php';
$dates1 = show_guides_audit($_GET['id']);
$dates2 = show_guides($_GET['id']);
print_r($dates1);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>第<?php echo $_GET['id'];?>位導遊資訊</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/main.css">
    <script src="js/jquery-3.5.1.min.js"></script>
</head>
<body>
<?php require_once 'php/menu.php';?>


<?php foreach ($dates2 as $guide):endforeach;?>

                
    <div class="container">
        <div class="row d-flex justify-content-center ">
            <div class=" col-10 col-xs-12">
        <div class="list-group list-group-horizontal ">
             <a href="#list-one" class="list-group-item  " data-toggle="list"><h3 >進行審核</h3></a>
             
        </div>
        <div class="tab-content" >
            <div class="card tab-pane fade" id ="list-one">
                <div class="card-body ">
                    <div class="row d-flex justify-content-center ">
                        <img width="125"  class="img-fluid rounded-circle justify-item-center" src="<?php echo  $guide['photo'];?>" alt="">
                        <div class=""></div>
                    </div> 
                    <div class="row d-flex justify-content-center mt-2"><h4><?php echo $guide['name'];?></h4></div><hr>
                    <div class="row">
                        <div class="col-12 col-sm-6 text-center  " id="license">
                            <h4 class="text-center">旅遊證照</h4>
                            <?php if(!empty($dates1))
                            foreach ($dates1 as $guide_audit):?>
                            <?php echo  $guide_audit['license'];?>
                            <img width="500"  class="img-fluid h-75 " src="<?php echo $guide_audit['license'];?>" alt="此為導遊沒放照片">
                            <?php endforeach;?>
                        </div>
                        <div class="col-12 col-sm-6 text-center  ">
                            <h4 class="text-left text-center">旅遊經驗&動機</h4>
                            <?php if(!empty($dates1))
                            foreach ($dates1 as $guide_audit):?>
                            <p class="text-left "><?php echo $guide_audit['motive'];?></p>
                            <?php endforeach?>
                           
                        </div>
                        <div class="col-12 offset-sm-3 col-sm-6 offset-md-3 text-center  ">
                            <h4 class="text-left text-center">旅遊影片</h4>
                            <?php if(!empty($dates1))
                            foreach ($dates1 as $guide_audit):
                            if(!empty($guide_audit['video'])){?>
                            <div  class="mx-auto row d-flex justify-content-center card-text embed-responsive embed-responsive-16by9 " >
                            <iframe  class="embed-responsive-item" src="<?php echo $guide_audit['video'] ;?>" allowfullscreen></iframe>
                            </div>
                             <?php } endforeach; ?>  
                        </div>
                        <div class=" col-12">
                            <form method ="post" action="php/pass_or_nopass.php?id=<?php echo $_GET['id']?>">
                            <div class="mt-5 row d-flex justify-content-around">
                            <button type="submit" name="check" value="pass" class="btn btn-success pull-right">審核通過</button>
                            <button type="submit" name="check" value="nopass" class="btn btn-danger pull-left">審核不通過</button>
                            </div>
                            </form>
                        </div>
                        
                    </div>
                    
                </div>
            </div>
        
            
        </div>

        
        <h5 class="card-title">影片區</h5><hr>
                <?php if(!empty($dates2))
                     foreach ($dates2 as $guide_audit):
                     if(!empty($guide['video'])){?>
                        <div  class="mx-auto row d-flex justify-content-center card-text embed-responsive embed-responsive-16by9 " >
                        <iframe  class="embed-responsive-item" src="<?php echo $guide_audit['video'] ;?>" allowfullscreen></iframe>
                        </div>
                <?php } endforeach; ?>



        </div><!-- col的div -->

        </div><!-- row的div -->

        </div> <!-- tab-content的div -->
        













        </div>



<script>
$(document).ready(function () {
    $('#license img').click(function (e) { 
        e.preventDefault();
        
    });
});

$('#license img').mousemove(function (e) { 
    
    //$('#license img').css( 'cursor', 'pointer' );

    
});
</script>
    







<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
</body>

</html>