<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;


class detail extends Controller
{
    public function get_game_detail($id)
    {
        $game_data = DB::table('advanced')->where('id',$id)->get()->first();
        $some_link = DB::table('link')->where('bggid',$id)->get();
        //$some_comment = DB::table('comment')->where('bggid',$id)->get();
        //return view('game_detail',['data'=>$game_data,'links'=>$some_link,'comments'=>$some_comment]);
        return view('game_detail2',['data'=>$game_data,'links'=>$some_link]);
    }

    public function edit_chinese($id)
    {
        $game_data = DB::table('advanced')->where('id',$id)->get()->first();
        return view('edit',['data'=>$game_data]);
    }

    public function send_chinese($id,Request $request)
    {
        DB::table('chinese_resource')->insert(
        ['bggid' => $id, 'content' => $request['resource'], 'author'=> $request['author'], 'name_eng'=> $request['name_eng'], 'name_chinese'=> $request['name_chinese']]
        );
        return redirect('games/'.$id);
    }

    public function resources()
    {
        $chinese_resource = DB::table('chinese_resource')->get();
        return view('resources',['data'=>$chinese_resource]);
    }
    public function check_resources($id)
    {
        $chinese_resource = DB::table('chinese_resource')->where('bggid',$id)->get();
        return view('resources',['data'=>$chinese_resource]);
    }
    public function confirm_resources($id,Request $request)
    {
        DB::table('advanced')->where('id',$id)->update(['chinese_resource' =>$request['confirm_resource'], 'name_eng' =>$request['confirm_eng'] ,'name_chinese'=>$request['confirm_chinese']]);
        //DB::table('resources')->where('id',$id)->delete();
        return redirect('games/'.$id);
    }

}
