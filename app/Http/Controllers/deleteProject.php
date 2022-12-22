<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Project;

class deleteProject extends Controller
{
    function deleteProject($id)
    {
        $data=Project::find($id);

        $data->delete();

        return redirect('/showCoordinator');
    }
}
