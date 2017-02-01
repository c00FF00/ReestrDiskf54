<?php

namespace App\Http\Controllers;

use App\Reestr;
use Illuminate\Http\Request;

class ReestrController extends Controller
{

    public function index()
    {
        $result = null;
        return view('index', compact('result'));
    }


    public function show(Request $request)
    {
        $data = new Reestr();
        $result = $data->getByFamily($request->family);
        return view('index', compact('result'));
    }

}
