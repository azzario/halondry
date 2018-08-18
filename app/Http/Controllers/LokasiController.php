<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Lokasi;

class LokasiController extends Controller
{
    public function getLokasi()
    {
        $loc    = Lokasi::all();

        return response()->json(['loc' => $loc]);
    }
}
