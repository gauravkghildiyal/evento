<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function show($user_id){
        $user = User::find($user_id);
        return view("profile",compact(["user"]));
    }
}
