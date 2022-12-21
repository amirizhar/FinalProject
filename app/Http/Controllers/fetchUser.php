<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class fetchUser extends Controller
{
    function displayUser()
    {
        $output = User::all();
        return view('lecturer.updateProject',['list'=>$output]);
    }

    function displayDeleteLecturer()
    {
        $output = User::all();
        return view('coordinator.deleteLecturer',['list'=>$output]);
    }

    function deleteLecturer($id)
    {

        $data = User::find($id);
        $data -> delete();
        return redirect('deleteLecturer');
    }
    
}
