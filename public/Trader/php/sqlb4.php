<?php
@session_start();
date_default_timezone_set("Asia/Taipei");

function r1($date)//
{
    $data =null;
    $sql = "SELECT count(id) as r FROM `schedules` where ( '$date' between `start` and `end`)and(`region` like '%基隆%') " ;
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

function r2($date)//
{
    $data =null;
    $sql = "SELECT count(id) as r FROM `schedules` where ( '$date' between `start` and `end`)and(`region` like '%台北%') " ;
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
function r3($date)//
{
    $data =null;
    $sql = "SELECT count(id) as r FROM `schedules` where ( '$date' between `start` and `end`)and(`region` like '%新北%') " ;
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
function r4($date)//
{
    $data =null;
    $sql = "SELECT count(id) as r FROM `schedules` where ( '$date' between `start` and `end`)and(`region` like '%桃園%') " ;
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
function r5($date)//
{
    $data =null;
    $sql = "SELECT count(id) as r FROM `schedules` where ( '$date' between `start` and `end`)and(`region` like '%新竹%') " ;
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
function r6($date)//
{
    $data =null;
    $sql = "SELECT count(id) as r FROM `schedules` where ( '$date' between `start` and `end`)and(`region` like '%苗栗%') " ;
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
function r7($date)//
{
    $data =null;
    $sql = "SELECT count(id) as r FROM `schedules` where ( '$date' between `start` and `end`)and(`region` like '%台中%') " ;
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
function r8($date)//
{
    $data =null;
    $sql = "SELECT count(id) as r FROM `schedules` where ( '$date' between `start` and `end`)and(`region` like '%彰化%') " ;
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
function r9($date)//
{
    $data =null;
    $sql = "SELECT count(id) as r FROM `schedules` where ( '$date' between `start` and `end`)and(`region` like '%南投%') " ;
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
function r10($date)//
{
    $data =null;
    $sql = "SELECT count(id) as r FROM `schedules` where ( '$date' between `start` and `end`)and(`region` like '%雲林%') " ;
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
function r11($date)//
{
    $data =null;
    $sql = "SELECT count(id) as r FROM `schedules` where ( '$date' between `start` and `end`)and(`region` like '%嘉義%') " ;
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
function r12($date)//
{
    $data =null;
    $sql = "SELECT count(id) as r FROM `schedules` where ( '$date' between `start` and `end`)and(`region` like '%台南%') " ;
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
function r13($date)//
{
    $data =null;
    $sql = "SELECT count(id) as r FROM `schedules` where ( '$date' between `start` and `end`)and(`region` like '%高雄%') " ;
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
function r14($date)//
{
    $data =null;
    $sql = "SELECT count(id) as r FROM `schedules` where ( '$date' between `start` and `end`)and(`region` like '%屏東%') " ;
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
function r15($date)//
{
    $data =null;
    $sql = "SELECT count(id) as r FROM `schedules` where ( '$date' between `start` and `end`)and(`region` like '%台東%') " ;
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
function r16($date)//
{
    $data =null;
    $sql = "SELECT count(id) as r FROM `schedules` where ( '$date' between `start` and `end`)and(`region` like '%花蓮%') " ;
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
function r17($date)//
{
    $data =null;
    $sql = "SELECT count(id) as r FROM `schedules` where ( '$date' between `start` and `end`)and(`region` like '%宜蘭%') " ;
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
function r18($date)//
{
    $data =null;
    $sql = "SELECT count(id) as r FROM `schedules` where ( '$date' between `start` and `end`)and(`region` like '%澎湖%') " ;
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
function r19($date)//
{
    $data =null;
    $sql = "SELECT count(id) as r FROM `schedules` where ( '$date' between `start` and `end`)and(`region` like '%金門%') " ;
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
function r20($date)//
{
    $data =null;
    $sql = "SELECT count(id) as r FROM `schedules` where ( '$date' between `start` and `end`)and(`region` like '%連江%') " ;
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

function g1($date)//
{
    $data =null;
    $sql = "SELECT count(guide_id) as g FROM `schedules` where ( '$date' between `start` and `end`)and(`region` like '%基隆%') " ;
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

function g2($date)//
{
    $data =null;
    $sql = "SELECT count(guide_id) as g FROM `schedules` where ( '$date' between `start` and `end`)and(`region` like '%台北%') " ;
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

function g3($date)//
{
    $data =null;
    $sql = "SELECT count(guide_id) as g FROM `schedules` where ( '$date' between `start` and `end`)and(`region` like '%新北%') " ;
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

function g4($date)//
{
    $data =null;
    $sql = "SELECT count(guide_id) as g FROM `schedules` where ( '$date' between `start` and `end`)and(`region` like '%桃園%') " ;
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

function g5($date)//
{
    $data =null;
    $sql = "SELECT count(guide_id) as g FROM `schedules` where ( '$date' between `start` and `end`)and(`region` like '%新竹%') " ;
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

function g6($date)//
{
    $data =null;
    $sql = "SELECT count(guide_id) as g FROM `schedules` where ( '$date' between `start` and `end`)and(`region` like '%苗栗%') " ;
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

function g7($date)//
{
    $data =null;
    $sql = "SELECT count(guide_id) as g FROM `schedules` where ( '$date' between `start` and `end`)and(`region` like '%台中%') " ;
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

function g8($date)//
{
    $data =null;
    $sql = "SELECT count(guide_id) as g FROM `schedules` where ( '$date' between `start` and `end`)and(`region` like '%彰化%') " ;
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

function g9($date)//
{
    $data =null;
    $sql = "SELECT count(guide_id) as g FROM `schedules` where ( '$date' between `start` and `end`)and(`region` like '%南投%') " ;
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

function g10($date)//
{
    $data =null;
    $sql = "SELECT count(guide_id) as g FROM `schedules` where ( '$date' between `start` and `end`)and(`region` like '%雲林%') " ;
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

function g11($date)//
{
    $data =null;
    $sql = "SELECT count(guide_id) as g FROM `schedules` where ( '$date' between `start` and `end`)and(`region` like '%嘉義%') " ;
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

function g12($date)//
{
    $data =null;
    $sql = "SELECT count(guide_id) as g FROM `schedules` where ( '$date' between `start` and `end`)and(`region` like '%台南%') " ;
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

function g13($date)//
{
    $data =null;
    $sql = "SELECT count(guide_id) as g FROM `schedules` where ( '$date' between `start` and `end`)and(`region` like '%高雄%') " ;
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

function g14($date)//
{
    $data =null;
    $sql = "SELECT count(guide_id) as g FROM `schedules` where ( '$date' between `start` and `end`)and(`region` like '%屏東%') " ;
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

function g15($date)//
{
    $data =null;
    $sql = "SELECT count(guide_id) as g FROM `schedules` where ( '$date' between `start` and `end`)and(`region` like '%台東%') " ;
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

function g16($date)//
{
    $data =null;
    $sql = "SELECT count(guide_id) as g FROM `schedules` where ( '$date' between `start` and `end`)and(`region` like '%花蓮%') " ;
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

function g17($date)//
{
    $data =null;
    $sql = "SELECT count(guide_id) as g FROM `schedules` where ( '$date' between `start` and `end`)and(`region` like '%宜蘭%') " ;
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

function g18($date)//
{
    $data =null;
    $sql = "SELECT count(guide_id) as g FROM `schedules` where ( '$date' between `start` and `end`)and(`region` like '%澎湖%') " ;
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

function g19($date)//
{
    $data =null;
    $sql = "SELECT count(guide_id) as g FROM `schedules` where ( '$date' between `start` and `end`)and(`region` like '%金門%') " ;
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

function g20($date)//
{
    $data =null;
    $sql = "SELECT count(guide_id) as g FROM `schedules` where ( '$date' between `start` and `end`)and(`region` like '%連江%') " ;
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

function ra($date,$region)//
{
    $data =array();
    $sql = "SELECT `*`,`schedules`.`name` as 'name2' FROM `schedules`  left join `guides` on `schedules`.`guide_id`  = `guides`.`id` left join `users` on `guides`.`user_id` = `users`.`id`  where ( '$date' between `start` and `end`)and(`region` like '%$region%') " ;
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

function ga($date,$region)//
{
    $data =array();
    $sql = "SELECT `*`,`schedules`.`name` as 'name2' FROM `schedules`  inner join `users` on `schedules`.`guide_id`  = `users`.`id` where ( '$date' between `start` and `end`)and(`region` like '%$region%') " ;
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