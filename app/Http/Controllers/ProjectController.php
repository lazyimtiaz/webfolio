<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProjectController extends Controller
{
     public function index(){
        return view('projects.allprojects');
    }
     public function project(){
        return view('projects.project');
    }
}
