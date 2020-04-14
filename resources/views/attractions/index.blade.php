
<div class="content">
    <div class="row">
        <div class="col-12">
            <h2>導遊目前景點總覽</h2>
            <a href="{{route('attractions.create')}}" class="btn btn-success btn-sm">新增專長景點</a>
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
                        內容
                    </th>
                </tr>
                </thead>
                <tbody>
                @foreach($attractions as $attraction)
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
                            {{$attraction->content}}
                        </td>

                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
