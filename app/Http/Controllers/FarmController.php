<?php

namespace App\Http\Controllers;

use App\Models\District;
use App\Models\Gender;
use App\Models\Region;
use App\Models\Ward;
use App\Models\FarmSelling;
use App\Models\FarmLease;

use Illuminate\Http\Request;

class FarmController extends Controller
{
    //

    public function selling()
    {
        $data = [];
        $data['region'] = Region::get();
        $data['gender'] = Gender::get();
        $data['ward'] = Ward::get();
        $data['district'] = District::get();
        return view('pages.sellFarm', $data);
    }
    public function lease()
    {
        $data = [];
        $data['region'] = Region::get();
        $data['ward'] = Ward::get();
        $data['gender'] = Gender::get();
        $data['district'] = District::get();
        return view('pages.leaseFarm', $data);
    }
    public function SellFarm(Request $request)
    {
        // dd($request->all());
        $request->validate([
            'first_name' => 'required|string|max:30',
            'middle_name' => 'required|string|max:30',
            'last_name' => 'required|string|max:30',
            'useremail' => 'required|email',
            'mobile_no' => 'required',
            'gender' => 'required',
            'known_location' => 'required',
            'size' => 'required',
            'sell_price' => 'required',
            'location_id' => 'required',
            'Price_Negotiable' => 'required',
            'farm_photo' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
        $imageName = time() . '.' . $request->farm_photo->extension();
        $request->farm_photo->move(public_path('images'), $imageName);

        $query = FarmSelling::create([
            'first_name' => $request->input('first_name'),
            'middle_name' => $request->input('middle_name'),
            'last_name' => $request->input('last_name'),
            'useremail' => $request->input('useremail'),
            'mobile_no' => $request->input('mobile_no'),
            'gender' => $request->input('gender'),
            'known_location' => $request->input('known_location'),
            'size' => $request->input('size'),
            'sell_price' => $request->input('sell_price'),
            'location_id' => $request->input('location_id'),
            'Price_Negotiable' => $request->input('Price_Negotiable'),
            'region_id' => $request->input('region_id'),
            'district_id' => $request->input('district_id'),
            'ward_id' => $request->input('ward_id'),
            'category_id' => 1,

        ]);
        if ($query) {
            return back()->with('success', 'A farm For Sale Created successfully');
        } else {
            return back()->with('error', 'Something is wrong in your form');
        }
    }

}
