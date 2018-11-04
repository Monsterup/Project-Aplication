<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Role;

class Users extends Controller
{
    public function register(){
        return view('register');
    }
    public function postRegister(){
        $user = new User();
        $user -> name = Input::get('name');
        $user -> username = Input::get('username');
        $user -> email = Input::get('email');
        $user -> password = bcrypt(Input::get('password'));
        $user -> roles_id = DB::table('roles')->select('id')->where('role_name','user')->first()->id;

        $user -> save();
        return redirect('login')->with('alert-success','Kamu berhasil Register');
    }
    public function login(){
        return view('login');
    }
    public function postLogin(Request $request){
        if(Auth::attempt([
            'email' => $request -> emailUsername, 
            'password' => $request -> password,
            ]
            ))
        {
            return redirect('/');
        }
        else if(Auth::attempt([
            'username' => $request -> emailUsername, 
            'password' => $request -> password,
            ]))
        {
            return redirect('/');
        }
        else{
            return redirect('login')->with('alert','Password atau Email, Salah!');
        }
    }
}
