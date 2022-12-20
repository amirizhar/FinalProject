<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class updateProject extends Controller
{

    function displayProject()
    {
        $output = Project::all();
        return view('lecturer.updateProject',['senarai'=>$output]);

        // $output = Project::select('select * from projects where supervisor = Saiful');
        // return view('lecturer.updateProject',['senarai'=>$output]);
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

        $data->project_title=$req->project_title;
        $data->start_date=$req->start_date;
        $data->end_date=$req->end_date;
        $data->duration=$req->duration;
        $data->student_name=$req->student_name;
        // $data->project_type=$req->project_type;
        // $data->supervisor=$req->supervisor;
        // $data->examiner_1=$req->examiner_1;
        // $data->examiner_2=$req->examiner_2;
        $data->project_progress=$req->project_progress;
        $data->project_status=$req->project_status;

        $data->save();

        return redirect('/showLecturer');

    }
}
