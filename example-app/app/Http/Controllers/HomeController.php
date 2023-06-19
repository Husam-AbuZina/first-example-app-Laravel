<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        //return view('home');
        $data = User::get();
        return view('home', ['users'=>$data]);
    }
}

//Route -> Controller -> View
// route/ get/ get data
// route/ post/ send data
// controller/ get / select * all from user;
