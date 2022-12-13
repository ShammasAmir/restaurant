<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Reserve;

class ReserveController extends Controller
{
    public function reserve(Request $request)
    {
        $data=new reserve;

        $data->name=$request->name;
        $data->email=$request->email;
        $data->phone=$request->phone;
        $data->guests=$request->guests;
        $data->date=$request->date;
        $data->time=$request->time;
        $data->message=$request->message;

        $data->save();

        return redirect()->back();

    }
}
