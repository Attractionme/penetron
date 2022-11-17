<?php

namespace App\Http\Controllers\admins\Users;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    protected function index(){
        //get users
        $users = User::get();

        return view('admins.users.index' , compact('users'));
    }
    
    protected function create(){
        
        return view('admins.users.create');
    }

    protected function store(Request $request){

       $request->validate([
        'name' => 'required',
        'email' => 'required|unique:users',
        'password' => 'required|min:6',
       ]);

       User::create([

        'name' => $request->name,
        'email' => $request->email,
        'password' => bcrypt($request->password),
       ]);
     

       return redirect()->route('users.index');
    }

    protected function edit($id){
        // find user by id
        $user = User::where('id' , $id)->first();

        return view('admins.users.edit' , compact('user'));
    }

    protected function update(Request $request , $id){
        
        $user = User::where('id' , $id)->first();

        $request->validate([
         'name' => 'required',
         'email' => 'required|unique:users',
         'password' => 'required|min:6',
        ]);
 
       $user->update([
 
         'name' => $request->name,
         'email' => $request->email,
         'password' => bcrypt($request->password),

        ]);
      
        return redirect()->route('users.index');
     }

     protected function destroy($id){

        $user = User::where('id' , $id)->first();

        $user->delete();

        return redirect()->back();


     }
}
