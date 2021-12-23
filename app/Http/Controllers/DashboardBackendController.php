<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardBackendController extends Controller
{
    public function index()
    {
        return view('layout-admin.page.dashboard');
    }
}
