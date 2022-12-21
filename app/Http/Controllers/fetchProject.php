<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use SebastianBergmann\Timer\Duration;

use App\Models\Project;
use App\Models\User;

class fetchProject extends Controller
{
    function showCoordinator()
    {
        $output=Project::paginate(5);
        return view('coordinator.adminpage',['senarai'=>$output]);
    }


    function showLecturer()
    {

        $output=Project::all();
        return view('lecturer.userpage',['lecturer'=>$output]);

    }

}
