<?php

namespace App\Http\Controllers;

use App\Models\Zodiac;
use Illuminate\Http\Request;
use Carbon\Carbon;

class ZodiacController extends Controller
{
    public function form()
    {
        return view('form');
    }

    public function result(Request $request)
    {
        $name = $request->nama;
        $birthdate = Carbon::parse($request->birthdate);
        $dateString = date('d-M', strtotime($birthdate));
        $now = Carbon::now();
        $diff = $birthdate->diff($now);
        $collection = collect(Zodiac::all());
        $zodiac = $collection->whereBetween($dateString, ['start_date', 'end_date'])->first();

        if ($zodiac) {
            $zodiacName = $zodiac->zodiac_name;
        } else {
            $zodiacName = 'Zodiac tidak ditemukan';
        }

        $data = [
            'nama' => $name,
            'tahun' => $diff->y,
            'bulan' => $diff->m,
            'hari' => $diff->d,
            'zodiak' => $zodiacName,
        ];

        return view('result', ['data' => $data]);
    }
}
