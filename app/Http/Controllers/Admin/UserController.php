<?php

namespace App\Http\Controllers\Admin;

use App\Models\Role;
use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class UserController extends Controller
{
    public function index(){

       auth()->loginUsingId(1);
        $users=User::all();
        return view('admin.user.index',compact('users'));
    }
    public function edit(User $user){
        // $rules=Role::all();
        return view('admin.user.edit',compact('user'));
        // $user->role_id=2;
    }
    public function update(User $user,Request $request){

       $user->role=$request->role;
       $user->save();
       return redirect()->route('admin.user.index');
    }


    public function delete(User $user){
        $user->delete();
       return redirect()->route('admin.user.index');

    }

}
