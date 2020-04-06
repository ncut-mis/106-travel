@extends('layouts.test')

@section('content')
        <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">修改行程</div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif
                            <table width="300" border="1">
                                　<tr>
                                    　<td>123</td>
                                    　<td>321</td>
                                    　</tr>
                            </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
