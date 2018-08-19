<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cucian extends Model
{
    protected $table    =  'cucian';
    protected $fillable =  [
                              'id_pelanggan',
                              'nama_pelanggan',
                              'kurir',
                              'id_maps',
                              'berat'
                            ];

    public function setIdPelangganAttribute($value)
    {
      if(empty($value)) {
        return $this->attributes['id_pelanggan'] = '0';
      }
    }

    public function getKurirAttribute($value)
    {
      return ucfirst($value);
    }
}
