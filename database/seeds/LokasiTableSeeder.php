<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class LokasiTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('lokasi')->insert([
            [
                'nama'          => 'Kantor',
                'latlng'        => '-6.545953, 107.777033',
                'created_at'    => Carbon::now(),
                'updated_at'    => Carbon::now()
            ]
        ]);
    }
}
