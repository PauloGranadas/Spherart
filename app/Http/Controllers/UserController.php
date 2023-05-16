<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class UserController extends Controller
{
    function showCollaborators(){
        $users = User::all();
        return view('users.collaborators', ['users'=> $users]);
    }

    function show(User $user){
        return view('users.show', ['user'=>$user]);
    }

}
