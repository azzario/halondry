<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class RefHarga extends Model
{
    protected $table        = 'ref_harga';
    protected $fillable     = [
                                'nama',
                                'harga_per_satu'
                              ];
}
