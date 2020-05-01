@extends('layouts.guide')

@section('content')

    <table class="table table-hover">
        <thead>
        <tr>
            <th >建立日期</th>
            <th >旅遊區域</th>
            <th >景點名稱</th>
            <th >導遊費用</th>
        </tr>
        </thead>
                @foreach($attraction as $attraction)
                            @if($attraction->location == $schedule_region || strpos($attraction->name,$schedule_name))
                                <tr>
                                <td>
                                    {{$attraction->created_at}}
                                </td>
                                <td>
                                    {{$attraction->location}}
                                </td>
                                    <td>
                                        <a href="{{route('attractions.show',$attraction->id)}}">{{$attraction->name}} </a>
                                    </td>
                                    <td>
                                        {{$attraction->price}}
                                    </td>
                                    <td>
                                        <form action="{{route('scheduleguides.index')}}" method="post">
{{--                                            {{ csrf_field() }}--}}
{{--                                            <input type = "hidden" id = "id" name = "id" value = "{{$b1->id}}">--}}

                                            <button type="submit" class="btn btn-danger">媒合導遊</button>
                                        </form>
                                    </td>

                            @else

                            @endif

                                </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
