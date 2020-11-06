<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

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

    public function users(User $users)
    {
        if(Auth()->user()->getRoleId() != config('access.roles.admin')) return back();

        $context = [
            'users' => $users->all()
        ];
        return view('users', $context);
    }

    public function profile()
    {
        return view('user');
    }
}
