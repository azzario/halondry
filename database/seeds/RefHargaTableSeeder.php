<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class RefHargaTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('ref_harga')->insert([
            [
                'nama'              => 'kurir',
                'harga_per_satu'    => '1000',
                'created_at'        => Carbon::now(),
                'updated_at'        => Carbon::now()
            ]
        ]);
    }
}
