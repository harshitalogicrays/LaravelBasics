<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;


class homecontroller extends Controller
{
    // http://127.0.0.1:8000/
    public function index(){
        // return "hello";  echo "hello";
        // return view('welcome');
        //welcome.blade.php
        // return view('homepage');
        return view('easyzoom');
    }
    // http://127.0.0.1:8000/about
    public function about(){
        return view('about');
        //about.blade.php
    }

    public function home($request=null){
        // $name="<u>happy</u>";
        $email="happy@gmail.com";
        // $login=$request??"guest";
        $name=$request;
        $login=true;
        $data=compact('name','email','login');
        return view('homepage')->with($data);
    }

    public function fetcharray(){
        $color=[];
        $login=['abc'=>12344,'xyz'=>232323,'pqr'=>232323];
        $data=compact('color','login');
        return view('homepage')->with($data);
    }

    public function langdemo($lang=null){
       App::setlocale($lang); 
       return view('homepage');
    }
    public function images(){
        return view('easyzoom');
    } 
}
