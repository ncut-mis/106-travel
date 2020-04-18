@extends('layouts.test')

@section('content')
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



                        <form class="form-horizontal" action="{{ route('edit') }}" method="POST">
                            {{ csrf_field() }}
                            <input type="hidden" class="form-control" id="update_id" name="update_id" value={{$a2->id}}>
                            <div  class="form-group" >
                                <label class="control-label col-sm-2" for="email">Email:</label>
                                <div class="col-sm-10">
                                    <input type="email" class="form-control" id="update_email" name="update_email" value={{$a2->email}}>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-sm-2" for="pwd">姓名:</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="update_name" name="update_name"  value={{$a2->name}}>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-sm-2" for="pwd">性別:</label>
                                <div class="col-sm-10">

                                    <select id="update_sex" name="update_sex" class="form-control @error('sex') is-invalid @enderror" type="text" value={{$a2->sex}}>
                                        <option value=男>男</option>
                                        <option value=女>女</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-sm-2" for="pwd">生日:</label>
                                <div class="col-sm-10">
                                    <input type="date" class="form-control" id="update_birthday" name="update_birthday"  value={{$a2->birthday}}>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-sm-2" for="pwd">電話:</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="update_phone" name="update_phone"  value={{$a2->phone}}>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-default">儲存</button>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
