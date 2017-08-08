@extends('main')
@section('title')
detail
@endsection
@section('content')

<div style="display:none" name="main" class="col-md-10 col-md-offset-1">
    <div class="panel panel-default">
      <div class="panel-body">
        <div class="col-md-8 col-md-offset-2">
            <img src="https://cf.geekdo-images.com/images/{{$data->imgsrc}}" style="width:30%" class="img-rounded center-block">
            <br>
            <table class="table text-center">
                <tr>
                    <td><b>出版年份</b></td>
                    <td>{{ $data->publish_year }}</td>
                </tr>
                <tr>
                    <td><b>英文名稱</b></td>
                    <td>{{ $data->name_eng }}</td>
                </tr>
                <tr>
                    <td><b>中文名稱</b></td>
                    <td>{{ $data->name_chinese }}</td>
                </tr>
                <tr>
                    <td><b>玩家人數</b></td>
                    <td>{{ $data->player_min }}～{{ $data->player_max }}人</td>
                </tr>
                <tr>
                    <td><b>遊戲時間</b></td>
                    <td>{{ $data->game_time }}分鐘</td>
                </tr>
                <tr>
                    <td><b>中文資源</b></td>
                    <td>{{ $data->chinese_resource }} <a href="/games/{{$data->id}}/edit" class="btn btn-default">edit</a></td>
                </tr>
                <tr>
                    <td><b>相關連結</b></td>
                    <td>
                        <a href="https://boardgamegeek.com/boardgame/{{$data->bggid}}"target="_blank">BGG</a><br>
                        @foreach($links as $url)
                        <a href="{{ $url->link }}"target="_blank">{{ $url->title }}</a><br>
                        @endforeach
                    </td>

                </tr>
            </table>

            <div>

            </div>
        </div>
    </div>


    @endsection