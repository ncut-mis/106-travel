@extends('layouts.test')
@section('content')
{{--    <form action="{{ route('schedules.create') }}" method="get">--}}
{{--        <button type="submit" class="btn btn-success" value="{{$cc}}" name="cc" id="cc">新增行程</button>--}}
{{--    </form>--}}
<a href="{{route('schedules.create',$cc)}}" class="btn btn-secondary btn-sm">新增行程</a>


                    <div >
                        <table class="table table-bordered table-hover" >
                        @foreach($b1 as $b1)
                            <tr>

                                <td>{{$b1->region}}</td>
                                <td>{{$b1->start}}</td>
                                <td>{{$b1->end}}</td>
                                <td>{{$b1->content}}</td>
                                <td>{{$b1->cost}}</td>
                                <td>

                            <form action="{{ route('schedules.edit') }}" method="POST">
                               {{ csrf_field() }}
                              <button type="submit" class="btn btn-success" name="update_id" id="update_id" value={{$b1->id}}>編輯</button>
                            </form>
                            <form action="{{ route('schedules.destroy') }}" method="POST">
                                        {{ csrf_field() }}
{{--                                        {{ method_field('DELETE') }}--}}
                                <input type="hidden" class="form-control" id="travel_id" name="travel_id" value={{$cc}}>
                                <button type="submit" class="btn btn-success" name="a2" id="a2" value={{$b1->id}}>刪除</button>
                            </form>
                            </td>

                        @endforeach
                        </table>
                    </div>

