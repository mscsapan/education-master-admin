<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        return view("admin.admin");
    }

    public function setting()
    {
        return view("admin.admin-setting");
    }
}
