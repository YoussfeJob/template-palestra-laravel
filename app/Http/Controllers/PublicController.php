<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PublicController extends Controller
{
    public function index(Request $request){
            $request->session()->decrement('toggle');
            return view('homepage');
    }

    public function offerte(){
        return view('offerte');
    }
}
