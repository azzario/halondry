<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Lokasi;

class LokasiController extends Controller
{
    public function getLokasi()
    {
        $kantor = Lokasi::where('nama', '=', 'kantor')->get();

        return response()->json(['kantor' => $kantor]);
    }
}
