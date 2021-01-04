<?php

namespace Database\Seeders;

use App\Models\Detpaket;
use Illuminate\Database\Seeder;

class DetPaketTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DetPaket::insert([

            // west
            ['paket_id' => 1, 'pax' => 2, 'harga' => 550000],
            ['paket_id' => 1, 'pax' => 3, 'harga' => 480000],
            ['paket_id' => 1, 'pax' => 4, 'harga' => 450000],
            ['paket_id' => 1, 'pax' => 5, 'harga' => 400000],
            ['paket_id' => 1, 'pax' => 6, 'harga' => 360000],

            // east
            ['paket_id' => 2, 'pax' => 2, 'harga' => 600000],
            ['paket_id' => 2, 'pax' => 3, 'harga' => 500000],
            ['paket_id' => 2, 'pax' => 4, 'harga' => 450000],
            ['paket_id' => 2, 'pax' => 5, 'harga' => 400000],
            ['paket_id' => 2, 'pax' => 6, 'harga' => 375000],

            // snork
            ['paket_id' => 3, 'pax' => 2, 'harga' => 760000],
            ['paket_id' => 3, 'pax' => 3, 'harga' => 720000],
            ['paket_id' => 3, 'pax' => 4, 'harga' => 660000],
            ['paket_id' => 3, 'pax' => 5, 'harga' => 600000],
            ['paket_id' => 3, 'pax' => 6, 'harga' => 570000],

            // 1d1n
            ['paket_id' => 4, 'pax' => 2, 'harga' => 890000],
            ['paket_id' => 4, 'pax' => 3, 'harga' => 795000],
            ['paket_id' => 4, 'pax' => 4, 'harga' => 750000],
            ['paket_id' => 4, 'pax' => 5, 'harga' => 700000],
            ['paket_id' => 4, 'pax' => 6, 'harga' => 680000],

            // 1d1n snork
            ['paket_id' => 5, 'pax' => 2, 'harga' => 1050000],
            ['paket_id' => 5, 'pax' => 3, 'harga' => 970000],
            ['paket_id' => 5, 'pax' => 4, 'harga' => 900000],
            ['paket_id' => 5, 'pax' => 5, 'harga' => 870000],
            ['paket_id' => 5, 'pax' => 6, 'harga' => 840000],

            // 2d1n
            ['paket_id' => 6, 'pax' => 2, 'harga' => 1150000],
            ['paket_id' => 6, 'pax' => 3, 'harga' => 1100000],
            ['paket_id' => 6, 'pax' => 4, 'harga' => 1050000],
            ['paket_id' => 6, 'pax' => 5, 'harga' => 950000],
            ['paket_id' => 6, 'pax' => 6, 'harga' => 900000],

            // 2d1n snor
            ['paket_id' => 7, 'pax' => 2, 'harga' => 1400000],
            ['paket_id' => 7, 'pax' => 3, 'harga' => 1300000],
            ['paket_id' => 7, 'pax' => 4, 'harga' => 1050000],
            ['paket_id' => 7, 'pax' => 5, 'harga' => 1000000],
            ['paket_id' => 7, 'pax' => 6, 'harga' => 960000],

            // 3d2n snor
            ['paket_id' => 8, 'pax' => 2, 'harga' => 1950000],
            ['paket_id' => 8, 'pax' => 3, 'harga' => 1750000],
            ['paket_id' => 8, 'pax' => 4, 'harga' => 1700000],
            ['paket_id' => 8, 'pax' => 5, 'harga' => 1600000],
            ['paket_id' => 8, 'pax' => 6, 'harga' => 1450000],

        ]);
    }
}