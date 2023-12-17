<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AddressController extends Controller
{
    public function provinces()
    {
        $url = "https://www.emsifa.com/api-wilayah-indonesia/api/provinces.json";
        $provinces = json_decode(file_get_contents($url), true);

        return response()->json($provinces);
    }

    public function regencies($id)
    {
        $url = "https://www.emsifa.com/api-wilayah-indonesia/api/regencies/" . $id . ".json";
        $regencies = json_decode(file_get_contents($url), true);

        return response()->json($regencies);
    }

    public function districts($id)
    {
        $url = "https://www.emsifa.com/api-wilayah-indonesia/api/districts/" . $id . ".json";
        $districts = json_decode(file_get_contents($url), true);

        return response()->json($districts);
    }
}
