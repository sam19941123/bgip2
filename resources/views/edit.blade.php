@extends('main')

@section('content')

<div style="display:none" name="main" class="col-md-10 col-md-offset-1">
    <div class="panel panel-default">
      <div class="panel-body">
<div class="col-md-8 col-md-offset-2">
    <img src="https://cf.geekdo-images.com/images/{{$data->imgsrc}}" style="width:30%" class="img-rounded center-block">
    <br>
    <table class="table text-center">
    <form method="POST" action="/games/{{$data->id}}" class="form-horizontal">
        {{ csrf_field() }}
        <tr>
            <td><b>你的名字</b></td>
            <td>
                    <textarea name="author" rows="1" cols="30"></textarea>
                    <br>   
            </td>
        </tr>
        <tr>
            <td><b>英文名稱</b></td>
            <td>
                    <textarea name="name_eng" rows="1" cols="30">{{ $data->name_eng }}</textarea>
                    <br>   
            </td>
        </tr>
        <tr>
            <td><b>中文名稱</b></td>
            <td>
                    <textarea name="name_chinese" rows="1" cols="30">{{ $data->name_chinese }}</textarea>
                    <br>   
            </td>
        </tr>
        <tr>
            <td><b>中文資源</b></td>
            <td> 
                    <textarea name="resource" rows="10" cols="30">{{ $data->chinese_resource }}</textarea>
                    <br>
            </td>
        </tr>
        <tr>
            <td>
                <input type="submit"></input>
            </td>
        </tr>
    </form>    
    </table>

<div>
</div>
</div>
</div>
 


@endsection