<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\project;
use App\Models\user;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class svControl extends Controller
{
    function svviewproj()// view project for svisee 
    {
        $usersess=Auth::user()->id;

        $data=project::where('supervisor_id','=',$usersess)->paginate(5); //paginate to capture only 5 values

        return view("sv.svproject",['data'=>$data]);//go to new page to view project info

    }

    function updatedata($getid) //show the original records
    {
        $data=project::find($getid); //to capture one set of data in a table//

        return view("sv.updproject",['data'=>$data]); //go to form page to insert updates
    }

    function updatenow(Request $req) //update the form into DB
    {
        $data=project::find($req->id);

        $data->start_date=$req->startdate;
        $data->end_date=$req->enddate;
        $data->duration=$req->duration;
        $data->project_progress=$req->projectprogress;
        $data->project_status=$req->projectstatus;
        $data->save();

        return redirect("/projinfo");
    }

    function ExamineeProj()// view project for examinee
    {
        $usersess=Auth::user()->id;

        $data=project::where('examiner1_id','=',$usersess)->paginate(5); //paginate to capture only 5 values

        return view("sv.svexaminee",['data'=>$data]);//go to new page to view project info

    }
}
