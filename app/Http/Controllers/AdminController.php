<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\User;

use App\Models\Food;

use App\Models\Reserve;

class AdminController extends Controller
{
    public function user()
    {
        $data=user::all();
        return view("admin.users",compact("data"));
    }

    public function deleteuser($id)
    {
        $data=user::find($id);
        $data->delete();
        return redirect()->back();
    }

    public function food()
    {
        $data=food::all();
        return view("admin.adminfoods",compact("data"));
    }

    public function createfood(Request $request)
    {
        $data=new food;

        $data->title=$request->title;
        $data->price=$request->price;
        $data->description=$request->description;

        $image=$request->image;
        $imagename=time().'.'.$image->getClientOriginalExtension();
        $request->image->move('foodimage',$imagename);
        $data->image=$imagename;

        $data->save();

        return redirect()->back();
    }

    public function deletefood($id)
    {
        $data=food::find($id);
        $data->delete();
        return redirect()->back();
    }

    public function editfood($id)
    {
        $data=food::find($id);
        return view("admin.editfood",compact("data"));
    }

    public function updatefood(Request $request, $id)
    {
        $data=food::find($id);

        $data->title=$request->title;
        $data->price=$request->price;
        $data->description=$request->description;

        $image=$request->image;
        $imagename=time().'.'.$image->getClientOriginalExtension();
        $request->image->move('foodimage',$imagename);
        $data->image=$imagename;

        $data->save();

        return redirect()->route("foods");
        
    }

    public function reservation()
    {
        $data=reserve::all();
        return view("admin.adminreservations",compact("data"));
    }

    public function deletereservation($id)
    {
        $data=reserve::find($id);
        $data->delete();
        return redirect()->back();
    }
}
