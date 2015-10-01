<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Auth;

class PagesController extends Controller
{
    public function about(){
        return view('core.pages.about');
    }

    public function contact() {
        return view('core.standard');
    }
    /**
    * Function for Projects .
    * Using
    */
    public function projects(){
        return "Projects";
    }


    /**
    * Function for Whoami
    * Using
    */
    public function home(){
        echo('Welcome ' . Auth::user()->name . '.');
    }

}
