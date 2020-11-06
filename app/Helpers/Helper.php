<?php

namespace App\Helpers;

use Illuminate\Http\Request;

class Helper
{

    public function instance()
    {
        switch(Auth()->user()->getRoleName()){
            case 'publisher':
                $navigation = "Places";
                break;
            case 'advertiser':
                $navigation = "Ads";
                break;
            default:
                $navigation = "Ads";
        }

        $context = [
            'navigation' => $navigation,
        ];

        return $context;
    }
}
