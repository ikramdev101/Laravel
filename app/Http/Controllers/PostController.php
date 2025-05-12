<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index(){
        return 'hellow first controller Action ';
    }
    public function createPost(){
        return view('post-create');
    }

};
