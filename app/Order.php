<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $table = 'order';
    protected $fillable = [
      'id_cucian',
      'harga',
      'diskon',
      'harga_total'
    ];

    public function cucian()
    {
      return $this->belongsTo('App\Cucian', 'id_cucian');
    }
}
