<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ServiceController extends Controller
{
     public function index(){
        return view('services.allprojects');
    }
     public function service(){
        return view('services.service');
    }
}
