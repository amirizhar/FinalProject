<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class createProject extends Controller
{
    function index(){
        return view('coordinator.createProject');
    }
}
