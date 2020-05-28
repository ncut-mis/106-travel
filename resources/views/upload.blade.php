@extends('layouts.test')
<script src ="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
@section('content')
        <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header text-center">上傳審核資料</div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

                            <form class="form-horizontal" action="{{ route('upload') }}" enctype="multipart/form-data"  method="POST">

                                {{ csrf_field() }}
                                <input type="hidden" class="form-control" id="upload_id" name="upload_id" value = {{$user_id}} >
                                <input type="hidden" class="form-control" id="user_name" name="user_name" value = {{$user_name}} >
                                <input type="hidden" class="form-control" id="photo_name" name="photo_name" value = "" >
                                <input type="hidden" class="form-control" id="license_name" name="license_name" value = "" >
                                    <div  class="form-group" >
                                        <label class="control-label col-sm-2" for="id_card">身分證</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" id="id_card" name="id_card" value="{{$guide->id_card}}">
                                        </div>
                                    </div>

                                    <div  class="form-group" >
                                        <label class="control-label col-sm-2" for="fontsize">空白證號碼</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" id="fontsize" name="fontsize" value="{{$guide->fontsize}}">
                                        </div>
                                    </div>

                                <div class="form-group">
                                <label class="control-label col-sm-2" name="photo" for="photo" >大頭貼</label>
                                        <div class="col-sm-10">
                                            <input  type="file" id="photo"  name="photo">
                                        </div>
                                </div>

                                <div class="form-group">
                                    <label class="control-label col-sm-2" name="license"  for="license" >證照</label>
                                    <div class="col-sm-10">
                                        <input type="file" id="license" name="license">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-sm-2" for="motive">應徵動機</label>
                                    <div class="col-sm-10">
                                        <textarea name="motive"  cols="60" rows="6">{{$guide->motive}}</textarea >
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-default">上傳</button>
                            </form>

                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection

<script>
    $(document).ready(function () {
        $("#photo").on("change", function () {
            var i = $(this).val();
            str = i.split("\\")
            file_name = str[str.length - 1];
           $('#photo_name').attr("value", file_name);
        });

           form_data_append("file",$(this)[0].files[0]);

        $("#license").on("change", function () {
            var i = $(this).val();
            str = i.split("\\")
            file_name = str[str.length - 1];
           $('#license_name').attr("value", file_name);
        });


    });


</script>
