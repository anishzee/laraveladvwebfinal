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
        DB::delete('delete from projects where project_id=?',[$id]);

        return redirect('/allproject');
    }

    function svviewprojinfo()// view project for svisee under admin
    {
        $usersess=Auth::user()->id;

        $data=project::where('supervisor_id','=',$usersess)->paginate(5); //paginate to capture only 5 values

        return view("admin.svprojadmin",['data'=>$data]);//go to new page to view project info

    }

    function updateitsv($getid) //show the original records
    {
        $data=project::find($getid); //to capture one set of data in a table//

        return view("admin.updproject",['data'=>$data]); //go to form page to insert updates
    }

    function updateprojectsv(Request $req) //update the form into DB
    {
        $data=project::find($req->id);

        $data->start_date=$req->startdate;
        $data->end_date=$req->enddate;
        $data->duration=$req->duration;
        $data->project_progress=$req->projprogress;
        $data->project_status=$req->projstatus;
        $data->save();

        return redirect("admin.svprojadmin");
    }


}
