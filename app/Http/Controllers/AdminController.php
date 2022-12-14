<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\User;

use App\Models\Food;

use App\Models\Reserve;

use App\Models\Chef;

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
        if($image){
        $imagename=time().'.'.$image->getClientOriginalExtension();
        $request->image->move('foodimage',$imagename);
        $data->image=$imagename;
        }
        
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

    public function chef()
    {
        $data=chef::all();
        return view("admin.adminchefs",compact("data"));
    }

    public function createchef(Request $request)
    {
        $data=new chef;

        $data->name=$request->name;
        $data->speciality=$request->speciality;

        $image=$request->image;
        $imagename=time().'.'.$image->getClientOriginalExtension();
        $request->image->move('chefimage',$imagename);
        $data->image=$imagename;

        $data->save();

        return redirect()->back();
    }

    public function deletechef($id)
    {
        $data=chef::find($id);
        $data->delete();
        return redirect()->back();
    }

    public function editchef($id)
    {
        $data=chef::find($id);
        return view("admin.editchef",compact("data"));
    }

    public function updatechef(Request $request, $id)
    {
        $data=chef::find($id);

        $data->name=$request->name;
        $data->speciality=$request->speciality;

        $image=$request->image;
        if($image){
        $imagename=time().'.'.$image->getClientOriginalExtension();
        $request->image->move('chefimage',$imagename);
        $data->image=$imagename;
        }

        $data->save();

        return redirect()->route("chefs");
        
    }
}
