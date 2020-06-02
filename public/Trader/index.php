<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
    <title>平台業者畫面</title>
    <link rel="stylesheet" type="text/css" href="css/main.css">
</head>
<body class = "bgc index" style="background-image: url('pic/b7.jpeg');
background-size: cover;background-attachment: fixed;background-position: center;">
    
    <nav class="navbar   navbar-light bg-white   " style= "background-color:#000000" >
 
    <a class="navbar-brand" href="index.php">
        <img src="pic/cat.jpg" width="30" height="30" class="d-inline-block align-top  " alt="">
        平台業者
        </a>
    
     <div class="collapse navbar-collapse flex-row-reverse" id="navbarNav">
     <ul class="navbar-nav">
       
     </ul>
   </div>
 </nav>

<div class="container">


<form method="post" action="" class=" w-50 h-50" style ="transform: translate(50%,50%);color: #fff;
 border-radius: 10px;padding: 30px;font-size: 20px;
">
  <div class="form-group  " >
    <label for="exampleInputEmail1" >帳號</label>
    <input name="t1" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">密碼</label>
    <input name="t2" type="password" class="form-control" id="exampleInputPassword1">
  </div>
  <button style="font-size: 20px;" type="submit" class="btn btn-primary  mt-3">登入</button>
</form>

</div>

<?php 
session_start();
if(isset($_POST['t1']))
{
    $_SESSION['t1'] = $_POST['t1'];
}
if(isset($_POST['t2']))
{
    $_SESSION['t2'] = $_POST['t2'];
}
if(isset($_SESSION['t1'])&&$_SESSION['t2'])
{
    if($_SESSION['t1']=="root1234"&&$_SESSION['t2']=="root4321")
    {
        header("Location: b1.php"); 
    }
}



//session_destroy();登出session用

?>




<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
</body>
</html>