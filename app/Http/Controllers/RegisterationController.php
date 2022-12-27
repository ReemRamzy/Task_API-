<?php

namespace App\Http\Controllers;

use Validator;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Role;

class RegisterationController extends Controller
{
public function store(Request $request) {

    $validator = $request->validate([
        'name'=> 'required',
        'email'=>'required',
        'password'=>'required | min:8',
    ]);

    $user = new User;
    $user->name = $request->name;
    $user->email = $request->email;
    $user->password = bcrypt($request->password);

    $user-> save();
    $user->roles()->attach(Role::where('name','User')->first());
    auth()->login($user);

    return response()->json([
        'message'=>'user added successfully'
    ], 201 );

}
}
