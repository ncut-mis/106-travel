@extends('layouts.guide')

@section('content')

    <div class="content">
        <div class="row">
            <div class="col-12">
                <h2>顯示目前被預約行程</h2>
                <a href="{{url('home')}}" class="btn btn-secondary btn-sm">返回</a>
            </div>

        </div>
        <div class="col-12">
            <table class="table table-hover">
                <thead>
                <tr>
                    <th>
                        預約時間
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
                        <td>
                            @foreach($schedule_match as $schedule )
                                @if($schedule->attraction_id==$attraction->id && strtotime($today)<strtotime($schedule->start))
                                    {{$schedule->start}}
                                @endif
                            @endforeach

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

                    </tr>
                    @endif
                @endforeach
                </tbody>
            </table>
    </div>




