<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">修改基本資料</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <table width="500" border="1">
                        　<tr>
                            　<td>{{$a->name}}</td>
                            　<td>{{$a->sex}}</td>
                              <td>{{$a->birthday}}</td>
                            　<td>{{$a->phone}}</td>
                              <td>{{$a->email}}</td>
                            　
                            　</tr>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
