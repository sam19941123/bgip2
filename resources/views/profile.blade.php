@extends('main')
@section('title')
個人檔案
@endsection
@section('content')

<div style="display:none" name="main" class="col-md-10 col-md-offset-1">
    <div class="panel panel-default">
      <div class="panel-body">
        <div class="col-md-8 col-md-offset-2">

            <table class="table text-center">
                @if($profile->user_icon == NULL)
                    <h6>上傳大頭貼</h6>
                @else
                    <img src="/user-upload/{{ $profile->user_icon }}" style="width:200px;height:250px; vertical-align: middle"> 
                @endif
                <form class="form-horizontal" method="post" action="/profile/icon" accept-charset="UTF-8" enctype="multipart/form-data">  
                    {{ csrf_field() }}
                    <input type="file" class="form-control" id="user_icon_file" name="user_icon_file" placeholder="上傳圖片" value="">
                    <input type="submit"></input>
                </form> 
                <tr>
                    <td><a href="/profile/edit" class="btn btn-default">edit</a></td>
                </tr>
                <tr>
                    <td><b>姓名</b></td>
                    <td>{{ $profile->name }}</td>
                </tr>
                <tr>
                    <td><b>帳號</b></td>
                    <td>{{ $profile->email }}</td>
                </tr>
                <tr>
                    <td><b>性別</b></td>
                    <td>{{ $profile->gender }}</td>
                </tr>
                <tr>
                    <td><b>生日</b></td>
                    <td>{{ $profile->birth }}</td>
                </tr>
                <tr>
                    <td><b>等級</b></td>
                    <td>{{ $profile->level }}</td>
                </tr>


            </table>

        </div>
    </div>
</div>
</div>




@endsection