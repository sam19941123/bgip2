<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Validator;
use App\Http\Controllers\Controller;

class yellowcontroller extends Controller
{



  public function index()
  {
    $posts = DB::table('flights')->get();
    return view('yellowusers')
    ->with('title', 'My Blog')
    ->with('posts', $posts);
  }


  public function create()
  {
    return view('yellowlayout')
    ->with('title', '新增文章');
  }

  public function store(Request $request)
  {
        /*$validator = Validator::make($request->all(), [
            'firstname' => 'required|unique:posts|min:5',
           'lastname' => 'required',
        ]);

        if ($validator->fails()) {
            return redirect('post/create')
                        ->withErrors($validator)
                        ->withInput();
        }
*/

        $firstname = $request->input('firstname');
        $lastname = $request->input('lastname');
        $game_list = DB::table('flights')->insert(
        ['name' => $firstname, 'airline' => $lastname]
        );
        $posts = DB::table('flights')->get();
    return view('yellowusers')
    ->with('title', 'My Blog')
    ->with('posts', $posts);
  }

  public function show($id)
  {
      $post = DB::table('flights')->where('id', $id)->get();
      return view('yellowshow')
          ->with('title', 'My Flights - '. $post[0]->name)
          ->with('post', $post);
  }
  public function edit($id)
  {
      $post = DB::table('flights')->where('id', $id)->get();

      return view('yellowedit')
          ->with('title', '編輯航班')
          ->with('post', $post);
  }
  
  public function update(Request $request, $id)
  {
      $firstname = $request->input('Name');
      $lastname = $request->input('Airline');
      $game_list = DB::table('flights')->where('id', $id)->update(
        ['name' => $firstname, 'airline' => $lastname]
        );
      $post = DB::table('flights')->where('id', $id)->get();



      return view('yellowshow')
          ->with('title', 'My Flights - '. $post[0]->name)
          ->with('post', $post);
  }
  public function delete($id)
  {
      DB::table('flights')->where('id', $id)->delete();
      $posts = DB::table('flights')->get();
      
      return view('yellowusers')
          ->with('title', 'My Blog')
          ->with('posts', $posts);
  }


  public function get_list(Request $request)
    {
        $bg_en_name = $request->input('bg_en_name');
        $bg_ch_name = $request->input('bg_ch_name');
        $player_num = $request->input('player_num');
        if($player_num == null){
          $player_num_temp1 = 1000;
          $player_num_temp2 = 0;
        }
        else{
          $player_num_temp1 = $player_num;
          $player_num_temp2 = $player_num;
        }
        $publish_year1 = $request->input('publish_year1');
        $publish_year2 = $request->input('publish_year2');
        if($publish_year1 == "1960-")
          $publish_temp_y1 = -4000;
        else if($publish_year1 == null)
          $publish_temp_y1 = -4000;
        else
          $publish_temp_y1 = $publish_year1;
        if($publish_year2 == "1960-")
          $publish_temp_y2 = 1960;
        else if($publish_year2 == null)
          $publish_temp_y2 = 2200;
        else
          $publish_temp_y2 = $publish_year2;
        $game_time1 = $request->input('game_time1');
        $game_time2 = $request->input('game_time2');
        if($game_time1 == null)
          $gametime_temp_1 = 0;
        else
          $gametime_temp_1 = $game_time1;
        if($game_time2 == null)
          $gametime_temp_2 = 20000;
        else
          $gametime_temp_2 = $game_time2;
        $game_cat = $request->input('game_cat');
        $cht_version = $request->input('cht_version');
        if($cht_version == "on")
          $cht_version = 1;
        else 
          $cht_version = 0;
               
        if($game_cat == null){
          $game_list = DB::table('advanced')->where('name_eng','like','%'.$bg_en_name.'%')->where('name_chinese','like','%'.$bg_ch_name.'%')->where('player_min', '<=', $player_num_temp1)->where('player_max', '>=', $player_num_temp2)->where('publish_year', '>=', $publish_temp_y1)->where('publish_year', '<=', $publish_temp_y2)->where('game_time', '>=', $gametime_temp_1)->where('game_time', '<=', $gametime_temp_2)->where('cht_version','>=', $cht_version)->get();
        }
        else{
          $game_list_1 = DB::table('advanced')->where('catalog2', '=', $game_cat)->where('name_eng','like','%'.$bg_en_name.'%')->where('name_chinese','like','%'.$bg_ch_name.'%')->where('player_min', '<=', $player_num_temp1)->where('player_max', '>=', $player_num_temp2)->where('publish_year', '>=', $publish_temp_y1)->where('publish_year', '<=', $publish_temp_y2)->where('game_time', '>=', $gametime_temp_1)->where('game_time', '<=', $gametime_temp_2)->where('cht_version','>=', $cht_version);
          $game_list = DB::table('advanced')->where('catalog3', '=', $game_cat)->where('name_eng','like','%'.$bg_en_name.'%')->where('name_chinese','like','%'.$bg_ch_name.'%')->where('player_min', '<=', $player_num_temp1)->where('player_max', '>=', $player_num_temp2)->where('publish_year', '>=', $publish_temp_y1)->where('publish_year', '<=', $publish_temp_y2)->where('game_time', '>=', $gametime_temp_1)->where('game_time', '<=', $gametime_temp_2)->where('cht_version','>=', $cht_version)->union($game_list_1)->get();
        }
        session(['bg_en_name' => $bg_en_name]);

    
        return view('advance_game_list',['games'=>$game_list,'bg_en_name'=>$bg_en_name,'bg_ch_name'=>$bg_ch_name,'player_num'=>$player_num,'publish_year1'=>$publish_year1,'publish_year2'=>$publish_year2,'game_time1'=>$game_time1,'game_time2'=>$game_time2,'game_cat'=>$game_cat,'cht_version'=>$cht_version]);
    }
  
}
