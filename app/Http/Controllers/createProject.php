<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Project;
use App\Models\User;

class createProject extends Controller
{
    function index()
    {
        $output=User::all();
        return view('coordinator.createProject', ['senarai'=>$output]);

        // $output = User::select('users')->where('usertype', '=', 0)->get();
        // return view('coordinator.createProject', ['senarai'=>$output]);
        // $output=User::select("select * from users where 'usertype' = '0' ");

        // return view('coordinator.createProject');

        // $output= User::table('users')
        //             ->where('usertype', '==', 0)
        //             ->get();
    }

    function addProject(Request $req)
    {
        $project = new Project;

        $project->id = $req->id;
        $project->project_title = $req->project_title;
        $project->start_date = $req->start_date;
        $project->end_date = $req->end_date;
        $project->duration = $req->duration;
        $project->student_name = $req->student_name;
        $project->project_type = $req->project_type;
        $project->supervisor = $req->supervisor;
        $project->examiner_1 = $req->examiner_1;
        $project->examiner_2 = $req->examiner_2;

        $project->save();

        return redirect("/redirect");
    }


}
