<?php

namespace Database\Seeders;

use App\Models\Paket;
use Illuminate\Database\Seeder;

class PaketTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        Paket::insert([
            ['nama_paket' => 'Half Day West'],
            ['nama_paket' => 'Half Day East'],
            ['nama_paket' => 'Half Day Snorkeling'],
            ['nama_paket' => '1D1N'],
            ['nama_paket' => '1D1N Snorkeling'],
            ['nama_paket' => '2D1N'],
            ['nama_paket' => '2D1N Snorkeling']
        ]);
    }
}