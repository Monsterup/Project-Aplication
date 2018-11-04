<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Admin extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('role:admin');
    }
    public function index(){
        return view('adminPage');
    }
    public function delete(){
        return "Ini  halaman admin Delete data";
    }

    public function update(){
        return "Ini  halaman admin Update data";
    }
}
