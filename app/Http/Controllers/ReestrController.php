<?php

namespace App\Http\Controllers;

use App\Reestr;
use Illuminate\Http\Request;

class ReestrController extends Controller
{
    public function show(Request $request) {
    $data = new Reestr();
        var_dump($data->getByFamily($request->name));



    }
}
