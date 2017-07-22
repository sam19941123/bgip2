@extends('main')



@section('content')

<style>
.table-borderless > tbody > tr > td,
.table-borderless > tbody > tr > th,
.table-borderless > tfoot > tr > td,
.table-borderless > tfoot > tr > th,
.table-borderless > thead > tr > td,
.table-borderless > thead > tr > th {
    border: none;
}
</style>

<a href="/search" class="btn btn-danger btn-sm">BACK</a>
<br><br>
@if(count($data) == 0)
<h4>No new resources</h4>
@else

@foreach($data as $chinese_data)
<div class="col-md-4">
    <div name="panel" class="panel panel-default">
        <div class="panel-body">
            <table class="table table-borderless">
                <tr>
                    <td>
                        <h5 class="text-center">{{ $chinese_data->bggid}}</h5>
                    </td>
                </tr>
                <tr>
                    <td>
                        <h5 class="text-center">{{ $chinese_data->author}}</h5>
                    </td>
                </tr>
                <tr>
                    <td><b>暫存中文資源</b></td>
                   <td>
                      <form method="POST" action="/games/{{$chinese_data->bggid}}/confirm" class="form-horizontal">
                     {{ csrf_field() }}
                         <textarea name="confirm_resource" rows="5" cols="20">{{ $chinese_data->content }}</textarea>
                            <br>
                            <input type="submit"></input>
                        </form>
                    </td>
                </tr>
            </table>
        </div>
    </div>
</div>
@endforeach
@endif

@endsection