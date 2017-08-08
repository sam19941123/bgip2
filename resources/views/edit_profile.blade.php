@extends('main')
@section('title')
編輯個人檔案
@endsection
@section('content')

<div style="display:none" name="main" class="col-md-10 col-md-offset-1">
    <div class="panel panel-default">
      <div class="panel-body">
        <div class="col-md-8 col-md-offset-2">

            <table class="table text-center">
                <form method="POST" action="/profile" class="form-horizontal">
                    {{ csrf_field() }}
                    <tr>
                        <td><b>姓名</b></td>
                        <td>
                        <input type="text" name="name" value="{{ $profile->name }}">
                        </td>
                    </tr>
                    <tr>
                        <td><b>帳號</b></td>
                        <td>{{ $profile->email }}</td>
                    </tr>
                    <tr>
                        <td><b>性別</b></td>
                        <td>
                        <input type="radio" name="gender" value="male"> Male
                        <input type="radio" name="gender" value="female"> Female
                        <input type="radio" name="gender" value="other" checked> Other<br>
                        </td>
                    </tr>
                    <tr>
                        <td><b>生日</b></td>
                        <td>
                        <input type="date" name="birth" value="{{ $profile->birth }}">
                        </td>
                    </tr>
                    <tr>
                        <td><b>等級</b></td>
                        <td>{{ $profile->level }}</td>
                    </tr>
                    <tr>
                        <td>
                            <input type="submit"></input>
                        </td>
                        <td>
                            
                        </td>
                    </tr>
                </form>   


            </table>

        </div>
    </div>
</div>
</div>




@endsection