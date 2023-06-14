<?php

namespace App\Http\Controllers;

use App\Models\Region;
use App\Models\Ward;
use App\Models\Gender;
use App\Models\District;
use Illuminate\Http\Request;

class FarmController extends Controller
{
    //

    public function selling(){
        $data = [];
        $data['region'] = Region::get();
        $data['gender'] = Gender::get();
        $data['ward'] = Ward::get();
        $data['district'] = District::get();
        return view('pages.sellFarm',$data);
    }
    public function lease()
    {
        $data = [];
        $data['region'] = Region::get();
        $data['ward'] = Ward::get();
        $data['district'] = District::get();
        return view('pages.leaseFarm',$data);
    }
}
