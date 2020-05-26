@extends('layouts.guide')

@section('content')

    <table class="table table-hover">
        <thead>
        <tr>
            <th >建立日期</th>
            <th >旅遊區域</th>
            <th >景點名稱<br>(點選查看詳細資訊)</th>
            <th >導遊費用</th>
        </tr>
        </thead>

                @foreach($attraction as $attraction)
                            @if($attraction->location == $schedule_region && strstr($attraction->name,$schedule_name)
                                && $attraction->status ==1 && $attraction->member_name=="")
                                <tr>
                                <td>
                                    {{$attraction->created_at}}
                                </td>
                                <td>
                                    {{$attraction->location}}
                                </td>
                                    <td>
                                        <form action="{{ route('scheduleguides.show',$attraction->id) }}" method="POST">
                                            {{ csrf_field() }}
                                            <input type="hidden" class="form-control" id="attraction_id" name="attraction_id" value={{$attraction->id}}>
                                            <input type="hidden" class="form-control" id="schedule_id" name="schedule_id" value={{$schedule_id}}>
                                            <input type="hidden" class="form-control" id="travel_id" name="travel_id" value={{$travel_id}}>
                                            <input type = "hidden" id = "schedule" name = "schedule" value ={{$schedule->id}}>
                                            <input type = "hidden" id="name" name="name" value = {{$name}}>
                                            <button type="submit" class="btn btn-success" name="id" id="id">{{$attraction->name}}</button>
                                        </form>

                                    </td>
                                    <td>
                                        {{$attraction->price}}
                                    </td>
                            @endif
                                </tr>
                @endforeach
                </tbody>
            </table>
    <form action="{{route('schedules.reedit',$schedule_id)}}" method="post">
        {{ csrf_field() }}
        <input type="hidden" class="form-control" id="schedule_id" name="schedule_id" value={{$schedule_id}}>
        <input type="hidden" class="form-control" id="attraction_id" name="attraction_id" value={{$attraction->id}}>
        <input type="hidden" class="form-control" id="travel_id" name="travel_id" value={{$travel_id}}>
        <input type = "hidden" id = "schedule" name = "schedule" value = "{{$schedule->id}}">
        <input type = "hidden" id ="name" name="name" value = {{$name}}>
        <button type="submit" class="btn btn-danger">返回</button>
    </form>
        </div>
    </div>
</div>
