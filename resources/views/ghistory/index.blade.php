@extends('layouts.guide')

@section('content')

    <div class=out1 style='text-align:center'>
        <font size="10">
            <b>帶團歷史記錄</b>
        </font>
    </div>
    <div class="col-12">
        <table class="table table-hover">
            <thead>
            <tr>

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
            @foreach($attractions as $attraction)
             @if($attraction->reservation=='1')
                 <tr>
            <td>
               {{$attraction->name}}
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
{{--            {{$attractions->links()}}--}}
</div>





