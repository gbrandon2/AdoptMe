<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function welcome(){
    	return view('welcome');
    }

    public function login(){
    	return view('login');
    } 

    public function signin(){
    	return view('signin');
    }
}
