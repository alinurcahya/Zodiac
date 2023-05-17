<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CountController extends Controller
{
    public function count()
    {
        return view('count');
    }

    public function countResult(Request $request)
    {
        $data       = $request->number;
        $collection = collect($data);
        $max        = $collection->max();
        $filter     = $collection->sort();
        $filtered   = $filter->values()->all();

        return view('countResult', [
            'max'       => $max,
            'filter'    => $filtered
        ]);
    }
}
