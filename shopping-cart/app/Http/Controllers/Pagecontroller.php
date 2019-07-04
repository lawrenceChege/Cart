<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Pagecontroller extends Controller
{
    public function home(){
        $tasks = [
            'Go Home',
            'Eat ',
            'Sit ',
            'Dine'
    
        ];
        return view('welcome')->withTasks($tasks)->withTitle('sister');
    }
    public function about(){
        return view('about');
    }
    public function contact(){
        return view('contact');
    }
    public function signup(){
        return view('signup');
    }
    public function login(){
        return view('login');
    }
}
