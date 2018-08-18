<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\RefHarga;

class RefHargaController extends Controller
{
    public function getHarga(Request $request)
    {
        $qty    = $request->qty;
        $nama   = $request->nama;

        if($nama == 'cucian' && !empty($qty)) {
            $harga  = RefHarga::where('nama', '=', 'cucian')->get();
            foreach($harga as $data) {
                $hargaPerSatu   = $data->harga_per_satu;
            }
            //tentukan harganya
            $result = $qty * $hargaPerSatu;
            $format = number_format($result, 0, ".", ",");
            return response($format);
        } else {
            return response('0');
        }
    }
}
