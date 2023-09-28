<?php

namespace App\Http\Controllers;


class DashboardController extends Controller
{
    //  public function index()
    public function index()
    {
        return view('dashboard/index', [
            "title" => "Dashboard",
            // "layar" => "prefix",

        ]);
    }
}
