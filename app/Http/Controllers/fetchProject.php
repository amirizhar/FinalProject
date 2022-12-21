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
        $output=Project::all();
        return view('coordinator.adminpage',['senarai'=>$output]);
    }

    // Function to calculate month
    // function showDuration(){

    //     $toDate = Project::start_date();
    //     $fromDate = Project::end_date();
  
    //     $days = $toDate->diffInDays($fromDate);
    //     $months = $toDate->diffInMonths($fromDate);
    //     $years = $toDate->diffInYears($fromDate);
  
    //     print_r("In Days: ". $days);
    //     print_r("In Months: ". $months);
    //     print_r("In Years: ". $years);

    //     return view('lecturer.userpage',['senarai'=>$output]);

    // }

    function showLecturer()
    {
        $output=Project::all();
        return view('lecturer.userpage',['senarai'=>$output]);

        // $output = DB::table('projects')->get();
        // return view('lecturer.userpage',['senarai'=>$output]);

    }
}
