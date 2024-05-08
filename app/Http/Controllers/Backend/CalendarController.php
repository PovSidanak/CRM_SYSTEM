<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CalendarController extends Controller
{
    public function Calendar(){

        return view('backend.calendar.calendar');

       } //End Method
}
