<?php

namespace App\Http\Controllers;

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
    public function adverts()
    {
        return view('adverts');
    }

    public function report($id)
    {
        return view('report');
    }

    public function users()
    {
        return view('users');
    }

    public function profile()
    {
        return view('user');
    }
}
