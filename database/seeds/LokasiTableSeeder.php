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
            ],
            [
                'nama'          => 'Subang',
                'latlng'        => '-6.562178, 107.760735',
                'created_at'    => Carbon::now(),
                'updated_at'    => Carbon::now()
            ],
            [
                'nama'          => 'Pagaden',
                'latlng'        => '-6.524475, 107.791176',
                'created_at'    => Carbon::now(),
                'updated_at'    => Carbon::now()
            ],
        ]);
    }
}
