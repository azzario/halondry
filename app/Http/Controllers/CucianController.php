<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Cucian;

class CucianController extends Controller
{

    public function index()
    {
        $cucian = Cucian::orderBy('created_at', 'DESC')->get();

        return view('cucian.index', compact('cucian'));
    }

    public function create()
    {
        return view('cucian.create');
    }

    public function validateRules($request)
    {
        $this->validate($request, $this->rules, $this->customMessage);
    }

    public function store(Request $request)
    {
        $this->validateRules($request);

        Cucian::create($request->all());
        return redirect('/cucian')->with('success', 'Data berhasil ditambah');
    }

    private $rules = [
      'nama_pelanggan'            => 'required',
      'berat'                     => 'required',
      'id_pelanggan'              => 'sometimes'
    ];

    private $customMessage = [
      'nama_pelanggan.required'   => 'Nama pelanggan tidak boleh kosong',
      'berat.required'            => 'Berat tidak boleh kosong',
    ];
}
