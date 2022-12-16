<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class homeControl extends Controller
{
    function viewhomepage()
    {
        return view('welcome');
    }

    function userspagefunct()
    {
        $typeuser=Auth::user()->usertype; //capture usertype from DB (0 = user, 1 = admin)

        if($typeuser=='1')
        {
            return view('admin.adminpage'); //the coordinator view
        }
        
        else
        {
            return view('dashboard'); //the lecturers view
        }
        
    }

    function viewupd()
    {
        return view('admin.updproject');
    }
}
