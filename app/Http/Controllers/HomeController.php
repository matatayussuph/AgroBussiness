<?php

namespace App\Http\Controllers;

use App\Models\FarmLease;
use App\Models\FarmSelling;

class HomeController extends Controller
{
    public function index()
    {
        $data = [];
        $data['sl'] = FarmSelling::get();
        $data['ls'] = FarmLease::get();
        return view('pages.dashboard', $data);
    }

}
