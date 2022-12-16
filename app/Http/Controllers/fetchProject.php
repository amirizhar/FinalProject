<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Project;

class fetchProject extends Controller
{
    function showCoordinator()
    {
        $output=Project::all();
        return view('coordinator.adminpage',['senarai'=>$output]);
    }

    function showLecturer()
    {
        $output=Project::all();
        return view('lecturer.userpage',['senarai'=>$output]);
    }
}
