<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BlogController extends Controller
{
     public function index(){
        return view('blogs.allblogs');
    }
     public function blog(){
        return view('blogs.blog');
    }
}
