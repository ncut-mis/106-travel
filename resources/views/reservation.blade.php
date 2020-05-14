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
                        發表時間
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
                        狀態
                    </th>

                </tr>
                </thead>
                <tbody>
                @foreach($attraction as $attraction)


                    <tr>
                        <td>
                            {{$attraction->created_at}}
                        </td>
                        <td>
                            <a href="{{route('attractions.show',$attraction->id)}}">{{$attraction->name}} </a>
                        </td>
                        <td>
                            {{$attraction->location}}
                        </td>
                        <td>
                            {{$attraction->price}}
                        </td>
                        <td>
                            @if($attraction->status== "0")
                                未啟用
                            @elseif($attraction->status== "1")
                                啟用
                            @endif
                        </td>


                    </tr>


                @endforeach
                </tbody>
            </table>
    </div>




