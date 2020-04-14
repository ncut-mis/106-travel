<div class="content">
    <div class="row">
        <div class="col-12">
            <h2>{{$attraction->name}}</h2>
            <a href="{{route('attractions.index')}}" class="btn btn-secondary btn-sm">返回</a>
            <a href="{{route('attractions.edit',$attraction->id)}}" class="btn btn-primary btn-sm">編輯</a>
            <a href="#" class="btn btn-danger btn-sm">刪除</a>

        </div>
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                </div>
                <div class="card-body">
                    {{$attraction->content}}
                </div>
            </div>
        </div>
    </div>
</div>
