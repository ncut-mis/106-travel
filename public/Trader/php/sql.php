<?php
@session_start();
date_default_timezone_set("Asia/Taipei");
function get_guides()
{
    $data =array();
    $sql = "SELECT * FROM `guides` inner join `users` on `guides`.`user_id`  = `users`.`id`" ;

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

function get_pass0()
{
    $pass =array();
    $sql = "SELECT * FROM `guides` inner join `users` on `guides`.`user_id`  = `users`.`id` where`guides`.`pass`=0 "  ;

    $query = mysqli_query($_SESSION['link'],$sql);

    if($query)
    {
        if(mysqli_num_rows($query)>0)
        {
            while($row = mysqli_fetch_assoc($query))
            {
                $pass[] = $row;
            }
        }
    }

    else
    {
        echo "{$sql}語法請求失敗 <br>" . mysqli_error($_SESSION['link']);
    }
    return $pass ;
}


function get_pass1()
{
    $pass =array();
    $sql = "SELECT * FROM `guides` inner join `users` on `guides`.`user_id`  = `users`.`id` where`guides`.`pass`=1 "  ;

    $query = mysqli_query($_SESSION['link'],$sql);

    if($query)
    {
        if(mysqli_num_rows($query)>0)
        {
            while($row = mysqli_fetch_assoc($query))
            {
                $pass[] = $row;
            }
        }
    }

    else
    {
        echo "{$sql}語法請求失敗 <br>" . mysqli_error($_SESSION['link']);
    }
    return $pass ;
}

function get_pass1or2()
{
    $pass =array();
    $sql = "SELECT * FROM `guides`   inner join `users` on `guides`.`user_id`  = `users`.`id` where `pass` = 1 or `pass` = 2"  ;

    $query = mysqli_query($_SESSION['link'],$sql);

    if($query)
    {
        if(mysqli_num_rows($query)>0)
        {
            while($row = mysqli_fetch_assoc($query))
            {
                $pass[] = $row;
            }
        }
    }

    else
    {
        echo "{$sql}語法請求失敗 <br>" . mysqli_error($_SESSION['link']);
    }
    return $pass ;
}

function show_guides($id)
{
    $guides =array();
    $sql = "SELECT * FROM `guides`  inner join `users` on `guides`.`user_id` = `users`.`id` where `guides`.`user_id` = $id"  ;

    $query = mysqli_query($_SESSION['link'],$sql);

    if($query)
    {
        if(mysqli_num_rows($query)>0)
        {
            while($row = mysqli_fetch_assoc($query))
            {
                $guides[] = $row;
            }
        }
    }

    else
    {
        echo "{$sql}語法請求失敗 <br>" . mysqli_error($_SESSION['link']);
    }
    return $guides ;
}
/*
function show_guides_audit($id)
    {
    $guides =array();
    $sql = "SELECT * FROM `guides_audit`   where `guide_id` = $id"  ;

    $query = mysqli_query($_SESSION['link'],$sql);

    if($query)
    {
        if(mysqli_num_rows($query)>0)
        {
            while($row = mysqli_fetch_assoc($query))
            {
                $guides[] = $row;
            }
        }
    }

    

    else
    {
        echo "{$sql}語法請求失敗 <br>" . mysqli_error($_SESSION['link']);
    }
    return $guides ;
    }

    function show_guides_article($id)
    {
    $guides =array();
    $sql = "SELECT * FROM `guides_article`   where `guide_id` = $id"  ;

    $query = mysqli_query($_SESSION['link'],$sql);

    if($query)
    {
        if(mysqli_num_rows($query)>0)
        {
            while($row = mysqli_fetch_assoc($query))
            {
                $guides[] = $row;
            }
        }
    }

    

    else
    {
        echo "{$sql}語法請求失敗 <br>" . mysqli_error($_SESSION['link']);
    }
    return $guides ;
    }
*/
    

function pass0to1($id)
{
    $guides =array();
    $sql = "update `guides` set `pass` = 1 ,`pass_time` = now() ,`updated_at` = now() where `user_id` = $id"  ;

    $query = mysqli_query($_SESSION['link'],$sql);

    if($query)
    {
       
    }

    else
    {
        echo "{$sql}語法請求失敗 <br>" . mysqli_error($_SESSION['link']);
    }
   
}

function pass0to2($id)
{
    $guides =array();
    $sql = "update `guides` set `pass` = 2 ,`pass_time` = now() ,`updated_at` = now()  where `id` = $id"  ;

    $query = mysqli_query($_SESSION['link'],$sql);

    if($query)
    {
       
    }

    else
    {
        echo "{$sql}語法請求失敗 <br>" . mysqli_error($_SESSION['link']);
    }
   
}

function get_travels()
{
    $data =array();
    $sql = "SELECT * FROM `travels`  " ;

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


function get_Schedules($travel_id)
{
    $data =array();
    $sql = "SELECT * FROM `Schedules` inner join `guides` on Schedules.guide_id= `guides`.`id`  inner join `users` on `guides`.`user_id` = `users`.`id`  where `Schedules`.`id` =$travel_id  " ;

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

function get_Schedules_orderbyday()
{
    $data =array();
    $sql = "SELECT * FROM `Schedules`  " ;

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

function region($region)  //依地區找導遊
{
    $data =array();
    $sql = "SELECT * FROM `Schedules` where `region` like '%{$region}%'  ORDER BY `start` " ;

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


?>