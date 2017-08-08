<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;
use Validator;
use App\Http\Controllers\Controller;


class account extends Controller
{

    public function login()
    {
        return view('loginpage');
    }

    public function send_login(Request $request)
    {


        $account = DB::table('accounts')->where('account',$request['account'])->get()->first();
        if($account->password==$request['password'])
            return redirect('/');
        else
            return view('loginfail');
    }


    public function signup()
    {
        return view('register');
    }

    public function send_signup(Request $request)
    {

        $this->validate($request, [
        'name'             => 'required',                        // just a normal required validation
        'account'            => 'required|email|unique:accounts',     // required and must be unique in the ducks table
        'password'         => 'required|min:8',
        'password_confirm' => 'required|same:password'     
        ]);

        
        DB::table('accounts')->insert(
            ['account' => $request['account'], 'password' => $request['password'], 'name' => $request['name'], 'password_confirm' => $request['password_confirm']]
            );
        return redirect('/');
        /*
        $messages = [
        'same'    => 'The :attribute and :other must match.',
        'required' => 'The :attribute field is required.',
        'account' => 'The :attribute must be email.', 
        'unique' => 'The :attribute has been taken.',
        'min' => 'The :attribute is too short.'
        ];


        $rules = array(
        'name'             => 'required',                        // just a normal required validation
        'account'            => 'required|email|unique:accounts',     // required and must be unique in the ducks table
        'password'         => 'required|min:8',
        'password_confirm' => 'required|same:password|min:8'           // required and has to match the password field
        );
        */
        /*
        $validator = Validator::make($request->all(), $rules, $messages);

    // check if the validator failed -----------------------
        if ($validator->fails()) {

        // redirect our user back to the form with the errors from the validator
            return redirect('/register/send')
            ->withErrors($validator)
            ->withInput();
        } 

        else {
            DB::table('accounts')->insert(
                ['account' => $request['account'], 'password' => $request['password'], 'name' => $request['name'], 'password_confirm' => $request['password_confirm']]
                );
            return redirect('/');

        }
        */
    }




}
