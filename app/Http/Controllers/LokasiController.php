<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Lokasi;

class LokasiController extends Controller
{
    public function getLokasi()
    {
        $loc    = Lokasi::where('nama', '!=', 'kantor')->get();
        $kantor = Lokasi::where('nama', '=', 'kantor')->get();

        return response()->json(['loc' => $loc, 'kantor' => $kantor]);
    }
}
