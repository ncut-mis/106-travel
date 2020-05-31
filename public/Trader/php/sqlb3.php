<?php
@session_start();
date_default_timezone_set("Asia/Taipei");

function get_travels_total_year()//判斷年度營收
{
    $data =null;
    $date1 = date('Y/01/01');
    $date2 = date('Y/12/31');
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

function get_travels_total_month()//判斷月營收
{
    $data =null;
    $date1 = date('Y/m/01');
    $date2 = date('Y/m/31');
    $sql = "SELECT sum(total) as total FROM `travels` where `paytime`  between '$date1'
    and '$date2'" ;

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

function get_travels_total_today()//判斷今天營收
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

function get_users_searchfor_member()//判斷所有會員數
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

function get_users_searchfor_member_month()//判斷月會員數
{
    $data =null;
    $date1 = date('Y-m-01 00:00:00');
    $date2 = date('Y-m-31 23:59:59');
    $sql = "SELECT count(id) as members_total FROM `users` where (`type` = '會員') 
and (`created_at` between '$date1' and '$date2')" ;

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

function get_users_searchfor_member_today()//判斷月會員數
{
    $data =null;
    $date1 = date('Y-m-d 00:00:00');
    $date2 = date('Y-m-d 23:59:59');
    $sql = "SELECT count(id) as members_total FROM `users` where (`type` = '會員') 
and (`created_at` between '$date1' and '$date2')" ;

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

function get_guides_total_month()//判斷月導遊數
{
    $data =null;
    $date1 = date('Y-m-01 00:00:00');
    $date2 = date('Y-m-31 23:59:59');
    $sql = "SELECT count(id) as guides_total FROM `guides` where `pass` =1
    and (`pass_time` between '$date1' and '$date2')"  ;

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

function get_guides_total_today()//判斷今日出團導遊數
{
    $data =null;
    $date = date('Y/m/d');
    $sql = "SELECT count(guide_id) as guides_total FROM `schedules` where ( '$date' between `start` and `end`) and(trim(`guide_id`) !='')" ;
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
    $sql = "SELECT count(id) as travels_order_total FROM `travels`  " ;
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

function get_travels_order_total_month()//判斷訂單數
{
    $data =null;
    $date1 = date('Y-m-01 ');
    $date2 = date('Y-m-31 ');
    $sql = "SELECT count(id) as travels_order_total FROM `travels` where `paytime` between '$date1' and '$date2'" ;
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

function get_travels_order_total_today()//判斷今日訂單數
{
    $data =null;
    $date1 = date('Y-m-d 00:00:00');
    $date2 = date('Y-m-d 23:59:59');//今天日期
    $sql = "SELECT count(id) as travels_order_total FROM `travels`  where `paytime` between '$date1' and '$date2'" ;
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

function get_travels_total_month2($paytime)//判斷今天營收
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