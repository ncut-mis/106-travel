<?php
$file_path = $_SERVER['PHP_SELF'];
//echo $file_path;
$file_name =  basename($file_path);
//echo $file_name;
 switch($file_name)
{
    case 'index.php':
    $index = 0;
    break;
    case 'b1.php' :
    $index = 1;
    break;
    case 'b1v.php' :
    $index = 1;
    break;
    case 'b1c.php' :
      $index = 1;
      break;
    case 'b2.php':
    $index = 2;
    break;
    case 'b2a.php':
      $index = 2;
      break;
    case 'b3.php':
    $index = 3;
    break;
    case 'b4.php':
    $index = 4;
    break;
    case 'b4a.php':
      $index = 4;
      break;
      case 'b4b.php':
        $index = 4;
        break;

}
?>

<nav class="navbar navbar-expand-lg  navbar-light bg-white   " style= "background-color:#000000" >
 
<a class="navbar-brand" href="index.php">
    <img src="pic/cat.jpg" width="30" height="30" class="d-inline-block align-top  " alt="">
    平台業者
  </a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse flex-row-reverse" id="navbarNav">
    <ul class="navbar-nav">
      <li class="nav-item <?php if($index==1) echo "active"; ?>" >
        <a class="nav-link"  href="b1.php"> 導遊資訊</a>
      </li>
      <li class="nav-item" >
        <a class="nav-link <?php  echo ($index==2)?"active":""; ?> " href="b2.php">查詢每筆交易紀錄</a>
      </li>
      <li class="nav-item">
        <a class="nav-link <?php  echo ($index==3)?"active":""; ?>" href="b3.php?paytime=01" >營運統計</a>
      </li>
      <li class="nav-item">
        <a class="nav-link <?php  echo ($index==4)?"active":""; ?>" href="b4.php?date=<?php echo date("Y/m/d");?>" >營運監控</a>
      </li>
    </ul>
  </div>
</nav>