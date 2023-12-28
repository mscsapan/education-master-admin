<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function allPages()
    {
        return view('pages.page-all');
    }
    public function addNewPage()
    {
        return view('pages.page-add');
    }

    public function editPage()
    {
        return view('pages.page-edit');
    }
}
