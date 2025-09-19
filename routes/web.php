<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\BlogController;

Route::controller( HomeController::class)->group(
    function (){
        Route::get('/', 'index')->name('home');
        Route::get('/about', 'about')->name('about');
        Route::get('/contact', 'contact')->name('contact');
    }
);

Route::controller( ProjectController::class)->group(
    function (){
        Route::get('/projects', 'index')->name('projects');
        Route::get('/project/{id}/{slug}', 'project')->name('project');
      
    }
);
Route::controller( ServiceController::class)->group(
    function (){
        Route::get('/services', 'index')->name('services');
        Route::get('/service/{id}/{slug}', 'service')->name('service');
       
    }
);
Route::controller( BlogController::class)->group(
    function (){
        Route::get('/blogs', 'index')->name('blogs');
        Route::get('/blog/{id}/{slug}', 'blog')->name('blog');
       
    }
);