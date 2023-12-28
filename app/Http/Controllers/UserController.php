<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function allUsers()
    {
        return view('users.user-all');
    }
    public function addNewUsers()
    {
        return view('users.user-add');
    }
}
