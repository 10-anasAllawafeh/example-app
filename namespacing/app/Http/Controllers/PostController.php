<?php

namespace App\Http\Controllers;

use App\Models\post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function oneToMany_relation(){
        dd(post::find(1)->comments);
    }
}
