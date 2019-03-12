<?php

namespace App\Http\Controllers;

use App\Place;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response;

class DashboardController extends Controller
{
//opening the dashboard
    public function openDashboard()
    {
        return view('layouts.master');
    }

}

