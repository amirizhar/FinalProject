<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Http\Request;

class updateProject extends Controller
{

    function displayProject()
    {
        $output = Project::all();
        return view('lecturer.updateProject',['senarai'=> $output]);
    }

    function showProject($id)
    {
        $output = Project::find($id);
        return view('lecturer.updatePage',['disp'=>$output]);

        // return Project::find($id);
    }

    function update(Request $req)
    {
        $data=Project::find($req->id);

        $data->start_date = $req->start_date;
        $data->end_date = $req->end_date;
        $data->project_progress = $req->project_progress;
        $data->project_status = $req->project_status;

        $data->save();

        return redirect('showLecturer');

    }
}
