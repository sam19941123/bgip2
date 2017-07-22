@extends('main')

@section('content')

 
<div class="col-md-8 col-md-offset-2">
    <img src="https://cf.geekdo-images.com/images/{{$data->imgsrc}}" style="width:30%" class="img-rounded center-block">
    <br>
    <table class="table text-center">
        <tr>
            <td><b>英文名稱</b></td>
            <td>{{ $data->name_eng }}</td>
        </tr>
        
        <tr>
            <td><b>中文資源</b></td>
            <td>
                <form method="POST" action="/games/{{$data->id}}" class="form-horizontal">
                {{ csrf_field() }}
                    <textarea name="resource" rows="10" cols="30">{{ $data->chinese_resource }}</textarea>
                    <br>
                    <input type="submit"></input>
                </form>
            </td>
        </tr>
        
    </table>

<div>

 


@endsection