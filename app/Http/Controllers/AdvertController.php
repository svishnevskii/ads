<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdvertController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    protected function create()
    {
        switch(Auth()->user()->getRoleName()){
            case 'publisher':
                $title = "Create Widget";
                $action = "Get code";
                break;
            case 'advertiser':
                $title = "Create Ad";
                $action = "Create";
                break;
            case 'admin':
                $title = "Create Ad";
                $action = "Create";
                break;
        }

        $context = [
            'title' => $title,
            'action' => $action,
        ];

        return view('create', $context);
    }
}
