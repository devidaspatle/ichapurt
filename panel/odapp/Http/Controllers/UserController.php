<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
 
    public function index()
    {
        $users = User::all();
        return view('users.index',compact('users'));
    }

    public function create()
    {
      //
    }

    public function store(Request $request)
    {
        //
    }

    public function show(User $user)
    {
        //
    }

    public function edit($id)
    {
        $user = User::findOrFail($id);
        return view('users.edit', compact('user'));
    }

    public function update(Request $request, $id)
    {
        $user = User::find($id);
        $user->fullname = $request->get('fullname');
        $user->email = $request->get('email');
        $user->updated_at = date('Y-m-d H:i:s');
        $user->save();
     
        return redirect()->route('users.index')->with('message','User  has been updated successfully.');
    }

    public function destroy($id)
    {
        //
    }
}
