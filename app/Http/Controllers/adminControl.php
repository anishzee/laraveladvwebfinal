<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\project;
use App\Models\user;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class adminControl extends Controller
{
    function addnewproj()
    {
        return view('admin.newprojpage'); //go to new project page to add new proj
    }

    function writedatatoproject(Request $req) //receive data from form to DB
    {
        $data = new project;

        $data->title=$req->title;
        $data->supervisor_id=$req->supervisorid;
        $data->examiner1_id=$req->examiner1id;
        $data->examiner2_id=$req->examiner2id;
        $data->student_id=$req->studentid;
        $data->student_name=$req->studentname;
        $data->save();

        return redirect('/newproj');

    }

    function viewproj()
    {
        $data=project::all();

        return view('admin.adminviewproj',['data'=>$data]);
    }

    function viewlecturers()
    {
        $usersess=Auth::user()->id;

        $data=user::where('usertype','=','0')->paginate(5); //paginate to capture only 5 values

        return view("admin.lecturerinfo",['data'=>$data]);//go to new page to view lecturer info

    }

    function deleteit($id)
    {
        DB::delete('delete from users where id=?',[$id]);

        return redirect('/lectinfo');
    }
}