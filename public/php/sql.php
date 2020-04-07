<?php
@session_start();

function get_guides()
{
    $data =array();
    $sql = "SELECT * FROM `guides`  " ;

    $query = mysqli_query($_SESSION['link'],$sql);

    if($query)
    {
        if(mysqli_num_rows($query)>0)
        {
            while($row = mysqli_fetch_assoc($query))
            {
                $data[] = $row;
            }
        }
    }

    else
    {
        echo "{$sql}語法請求失敗 <br>" . mysqli_error($_SESSION['link']);
    }
    return $data ;
}

//$sql = "SELECT * FROM `guides`  ORDER BY id DESC LIMIT 0 , 1" ;

function get_last_guides()
{
    $lastdata =array();
    $sql = "SELECT * FROM `guides`  ORDER BY id DESC LIMIT 0 , 1"  ;

    $query = mysqli_query($_SESSION['link'],$sql);

    if($query)
    {
        if(mysqli_num_rows($query)>0)
        {
            while($row = mysqli_fetch_assoc($query))
            {
                $lastdata[] = $row;
            }
        }
    }

    else
    {
        echo "{$sql}語法請求失敗 <br>" . mysqli_error($_SESSION['link']);
    }
    return $lastdata ;
}


?>