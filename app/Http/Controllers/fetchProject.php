<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Project;
use App\Models\User;

class fetchProject extends Controller
{
    function showCoordinator()
    {
        $output=Project::all();
        return view('coordinator.adminpage',['senarai'=>$output]);
    }

    function showLecturer()
    {

        // $output = Project::table('users')
        // ->where('name', '=', 'Syahmah')
        // ->get();

        $output=Project::all();
        return view('lecturer.userpage',['senarai'=>$output]);

    }
}
