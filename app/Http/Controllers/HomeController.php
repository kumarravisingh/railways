<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Laravel\Pennant\Feature;

class HomeController extends Controller
{
    public function index(Request $request){

        //Feature::flushCache();
        return Feature::active('business')
            ? $this->resolveNewApiResponse() : $this->resolveLegacyApiResponse();
    }
    public function random(){
        Feature::flushCache();
        if(Feature::active('random')){
            return 'new';
        }else{
            return 'old';
        }
    }
private function resolveNewApiResponse(){
    return [
        'price'=>999
    ];
}

    private function resolveLegacyApiResponse(){
        return [
            'price'=>499
        ];
    }
}
