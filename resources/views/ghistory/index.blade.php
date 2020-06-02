@extends('layouts.guide')

@section('content')

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>


    <div class="content">
        <div class="row">
            <div class="col-12">
                <h2>帶團歷史紀錄</h2>
                <a href="{{url('home')}}" class="btn btn-secondary btn-sm">返回</a>
                <label for="month" class="sr-only">月份</label>
                <div class="btn-group">
                    <button type="submit" id="month1" name="month1" class="btn  dropdown-toggle btn-sm  btn-outline-secondary dropright" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        月份
                    </button>
                    <div class="dropdown-menu" id="month" name="month">
                        <a class="dropdown-item" href="">1</a>
                        <a class="dropdown-item" href="">2</a>
                        <a class="dropdown-item" href="">3</a>
                        <a class="dropdown-item" href="">4</a>
                        <a class="dropdown-item" href="">5</a>
                        <a class="dropdown-item" href="">6</a>
                        <a class="dropdown-item" href="">7</a>
                        <a class="dropdown-item" href="">8</a>
                        <a class="dropdown-item" href="">9</a>
                        <a class="dropdown-item" href="">10</a>
                        <a class="dropdown-item" href="">11</a>
                        <a class="dropdown-item" href="">12</a>
                    </div>
                </div>
                </button>
            </div>

        </div>

        <div class="col-12">
            <table class="table table-hover">
                <thead>
                <tr>
                    <th>
                        歷史時間
                    </th>
                    <th>
                        景點名稱
                    </th>
                    <th>
                        地點
                    </th>
                    <th>
                        價格
                    </th>
                    <th>
                        會員姓名
                    </th>

                </tr>
                </thead>
                <tbody>
                @foreach($attraction as $attraction )
                    @if($attraction->reservation=='1' && $attraction->status=='1' )
                        <tr>
                            @foreach($schedule_match1 as $schedule )
                                @if($schedule->attraction_id==$attraction->id  && strtotime($today)>strtotime($schedule->start)  )
                                    <td>
                                        {{$schedule->start}}
                                    </td>
                                    <td>
                                        {{$attraction->name}}
                                    </td>
                                    <td>
                                        {{$attraction->location}}
                                    </td>
                                    <td>
                                        {{$attraction->price}}
                                    </td>
                                    <td>
                                        {{$attraction->member_name}}
                                    </td>
                                @endif
                            @endforeach
                        </tr>
                    @endif
                @endforeach
                </tbody>
            </table>
        </div>


    </div>
    <script type="text/javascript">

        $(document).ready(function () {

            $('#month a').click(function (e) {
                var i = $(this).text();
                $(this).attr("href","?date="+i);
            });
        });
    </script>




