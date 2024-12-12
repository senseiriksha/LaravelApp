<?php

namespace App\Http\Controllers;

use App\Dashboard;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function __construct(Request $request, private Dashboard $dashboard)
    {
        dd($request->all());
    }

    public function welcome()
    {
        $this->dashboard->welcome();
    }
}
