<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Airport;

class AirportSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Airport::create([
            'country' => 'Poland',
            'city' => 'Warsaw',
            'code' => 'WAW'
        ]);
        Airport::create([
            'country' => 'Czech Republic',
            'city' => 'Prague',
            'code' => 'PRG'
        ]);
        Airport::create([
            'country' => 'Germany',
            'city' => 'Munich',
            'code' => 'MUC'
        ]);
        Airport::create([
            'country' => 'United Kingdom',
            'city' => 'London',
            'code' => 'LGW'
        ]);
        Airport::create([
            'country' => 'Portugal',
            'city' => 'Lisbona',
            'code' => 'LIS'
        ]);
    }
}
