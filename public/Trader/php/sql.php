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
    $sql = "update `guides` set `pass` = 1 , `updated_at` = now() where `user_id` = $id"  ;

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
    $sql = "update `guides` set `pass` = 2 , `updated_at` = now() where `id` = $id"  ;

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

function get_travels_total()//判斷今天營收
{
    $data =null;
    $date1 = date('Y-m-d 00:00:00');
    $date2 = date('Y-m-d 23:59:59');
    $sql = "SELECT sum(total) as total FROM `travels` where `paytime`  between '$date1'
    and '$date2'
     " ;

    $query = mysqli_query($_SESSION['link'],$sql);

    if($query)
    {
        if(mysqli_num_rows($query)==1)
        {
            $data =mysqli_fetch_assoc($query);
        }
        
        
    }

    else
    {
        echo "{$sql}語法請求失敗 <br>" . mysqli_error($_SESSION['link']);
    }
    return $data ;
}

function get_users_searchfor_member()//判斷會員數
{
    $data =null;
    $sql = "SELECT count(id) as members_total FROM `users` where `type` = '會員' " ;

    $query = mysqli_query($_SESSION['link'],$sql);

    if($query)
    {
        if(mysqli_num_rows($query)==1)
        {
            $data =mysqli_fetch_assoc($query);
        }
    }

    else
    {
        echo "{$sql}語法請求失敗 <br>" . mysqli_error($_SESSION['link']);
    }
    return $data ;
}

function get_guides_total()//判斷導遊數
{
    $data =null;
    $sql = "SELECT count(id) as guides_total FROM `guides` where `pass` =1" ;

    $query = mysqli_query($_SESSION['link'],$sql);

    if($query)
    {
        if(mysqli_num_rows($query)==1)
        {
            $data =mysqli_fetch_assoc($query);
        }
    }

    else
    {
        echo "{$sql}語法請求失敗 <br>" . mysqli_error($_SESSION['link']);
    }
    return $data ;
}

function get_travels_order_total()//判斷訂單數
{
    $data =null;
    $date = date('Y-m-d');//今天日期
    $sql = "SELECT count(id) as travels_order_total FROM `travels` where '$date' between `start` and `end` " ;
    $query = mysqli_query($_SESSION['link'],$sql);

    if($query)
    {
        if(mysqli_num_rows($query)==1)
        {
            $data =mysqli_fetch_assoc($query);
        }
    }

    else
    {
        echo "{$sql}語法請求失敗 <br>" . mysqli_error($_SESSION['link']);
    }
    return $data ;
}

function get_travels_order_Month($paytime)//營收表單
{
    $data =array();
    $sql = "SELECT `*`,sum(`total`) as 營業額 ,count(*) as 訂單數, ROUND(sum(total*0.9), 0) as 淨利率 FROM `travels`   where `paytime` between '2020/$paytime/01' and '2020/$paytime/31' Group by paytime " ;
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

function get_travels_total_month($paytime)//判斷今天營收
{
    $data =null;
    $sql = "SELECT sum(total) as 營業額 ,  ROUND(sum(total*0.9), 0) as 淨利率 FROM `travels` where `paytime`  between '2020/$paytime/01' and '2020/$paytime/31'
    
     " ;

    $query = mysqli_query($_SESSION['link'],$sql);

    if($query)
    {
        if(mysqli_num_rows($query)==1)
        {
            $data =mysqli_fetch_assoc($query);
        }
        
        
    }

    else
    {
        echo "{$sql}語法請求失敗 <br>" . mysqli_error($_SESSION['link']);
    }
    return $data ;
}

?>