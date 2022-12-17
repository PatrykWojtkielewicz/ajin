<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Airplane;

class AirplaneSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Airplane::create([
            'manufacturer' => 'Boeing',
            'model' => '787',
            'capacity' => '248',
            'productionYear' => '2011'
        ]);
    }
}
