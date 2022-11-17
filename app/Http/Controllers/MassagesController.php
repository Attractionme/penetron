<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use App\Models\Massages;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MassagesController extends Controller
{
    public function show()
    {
        $messeges = Massages::all();
        return view('contactAdmin',compact('messeges'));
    }

    public function delete_messege($id)
    {
        $messeges = Massages::find($id);
        $data = Massages::where("id", $id)->delete();
        return redirect('contactAdmin')->with('success', "Deleted Successfully");
    }




 public function store(Request $request)
 {
     $data = $request->except('_token','updated_at');
     DB::table('contact')->insert($data);
     return redirect()->back()->with('success', "تم إرسال استفسارك");
 }
}
