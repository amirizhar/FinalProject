<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Http\Request;

class updateProject extends Controller
{

    function displayProject()
    {
        $output=Project::all();
        return view('lecturer.updateProject',['senarai'=>$output]);
    }

    function showProject($id){

        $data=Project::find($id);
        return view('updatePage',['disp'=>$data]);
    }
}
