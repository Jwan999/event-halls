<?php

namespace EventHalls\Http\Controllers;

use EventHalls\Place;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response;

class DashboardController extends Controller
{
//opening the dashboard
    public function openDashboard()
    {
        return view('dashboard.mainDashPage');
    }

}

