<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EventController extends Controller
{
    public function allEvent()
    {
        return view('events.event-all');
    }
    public function addEvent()
    {
        return view('events.event-add');
    }
    public function editEvent()
    {
        return view('events.event-edit');
    }
    public function eventEnquiry()
    {
        return view('events.event-enquiry');
    }
    public function allSeminar()
    {
        return view('events.seminar-all');
    }
    public function addSeminar()
    {
        return view('events.seminar-add');
    }
    public function editSeminar()
    {
        return view('events.seminar-edit');
    }
    public function seminarEnquiry()
    {
        return view('events.seminar-enquiry');
    }
    public function allJob()
    {
        return view('events.job-all');
    }
    public function addJob()
    {
        return view('events.job-add');
    }
    public function editJob()
    {
        return view('events.job-edit');
    }
}
