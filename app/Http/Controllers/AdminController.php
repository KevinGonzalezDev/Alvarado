<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{

    public function index(){
        return view('welcome');
    }

    public function welcome(){
        return view('welcome');
    }

    public function services(){
        return view('services');
    }


    public function our(){
        return view('our');
    }

    public function ourClients(){
        return view('ourClients');
    }

    public function blog(){
        return view('blog');
    }
}
