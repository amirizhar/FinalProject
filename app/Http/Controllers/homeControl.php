<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class homeControl extends Controller
{
    function index(){
        return view('home');
    }

    function register(){
        return view('coordinator.registerLecturer');
    }




    function addLecturer(Request $req)
    {
        $member = new User;

        $member->name = $req->name;
        $member->email = $req->email;
        $member->password = $req->password;

        $member->save();



        return redirect('/showCoordinator');
    }




    function redirectFunct()
    {
        $typeuser=Auth::user()->usertype;

        if($typeuser=='1'){
            return redirect("/showCoordinator");
        }
        else{
            return redirect("/showLecturer");
        }
    }
}

