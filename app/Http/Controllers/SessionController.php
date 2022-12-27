<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SessionController extends Controller
{
    public function store() {
        if ( ! auth()-> attempt(request(['email' , 'password']))) {

        return back()->withErrors([
            'message' => 'Email or password is incorrect', 
        ]);

    }
    return response()->json([
        'message'=>'logged in successfully'
    ]);
    }
    public function destroy() {
        auth()->logout();
        return response()->json([
            'message'=>'user logged out'
        ]);
    }
}
