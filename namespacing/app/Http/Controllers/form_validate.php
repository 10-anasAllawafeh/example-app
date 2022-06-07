<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class form_validate extends Controller
{
    public function form_validate(Request $request){
        $request->validate([
            'firstName'=>'required|alpha',
            'email'=>'required|email',
            'password'=>'required|min:8|regex:/^.(?=.{3,})(?=.[a-zA-Z])(?=.[0-9])(?=.[\d\x])(?=.[!$#%]).$/',
            'phoneNumber'=>'numeric|digits_between:9,11'
        ]);
        return $request->input();
    }

    public function one_relation(){
        return User::find(1)->book;
    }
}
