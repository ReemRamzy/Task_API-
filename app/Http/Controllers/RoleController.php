<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Role;
use App\Models\User;

class RoleController extends Controller
{
    public function addRole(Request $request)
{
    $user = User::where('email' , $request['email'])->first();
    $user->roles()->detach();

    if($request['role_id'] == 3)
    {
        $user->roles()->attach(Role::where('name', 'user')->first());
    }
    if($request['role_id'] == 2)
    {
        $user->roles()->attach(Role::where('name', 'editor')->first());
    }
    if($request['role_id'] == 1)
    {
        $user->roles()->attach(Role::where('name', 'admin')->first());
    }

    return response()->json([
        'message'=>'User role changed successfully'
    ], 201 );
}

}
