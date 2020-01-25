<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MainController extends Controller
{
    function login(Request $request)
    {
        $user_id = $request->session()->get('user_id');
        $user_name = $request->session()->get('user_name');

        $users = DB::table('user_creds')->where('user_name', '=', $request->input('uname'))->where('password', '=', $request->input('password'))->get();
        if (sizeof($users) > 0) {
            session(['user_id' => $users[0]->user_id]);
            session(['user_name' => $users[0]->user_name]);
            return view('home', ['username' => $users[0]->user_name]);
        } else if ($user_id > 0) {
            return view('home', ['username' => $user_name]);
        } else
            return view('home', ['errorMsg' => 'invalid']);
    }

    function logout()
    {
        session()->flush();
        return view('home');
    }

    function signUp(Request $request)
    {
        $name = $request->input('name');
        $lName = $request->input('lName');
        $user = $request->input('user');
        $password = $request->input('password');

        $id = DB::table('user_creds')->insertGetId(
            ['user_name' => $user, 'password' => $password]
        );

        DB::table('user')->insert(
            ['user_id' => $id, 'last_name' => $lName, 'first_name' => $name, 'mode' => 'U']
        );

        return view('signup', ['fname' => $name, 'lname' => $lName]);
    }
}
