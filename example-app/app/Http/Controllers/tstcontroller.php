<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class tstcontroller extends Controller
{
    public function test(){
        return "Hello World";
    }

    public function render($id,$name){
        return "id: ".$id."<br>name: ".$name;
    }

    public function landPage(){
        return view("new");
    }
    public function contact(){
        return view("new1");
    }
    public function about(){
        return view("new2");
    }
    public function login(){
        return view("login");
    }
    public function signup(){
        return view("signup");
    }
}
