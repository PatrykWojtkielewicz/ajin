<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Connection;

class ConnectionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // WAW to PRG
        Connection::create([
            'airplaneId' => '1',
            'departureAirportId' => '1',
            'arrivalAirportId' => '2',
            'departureTime' => '15:20:00',
            'arrivalTime' => '16:40:00',
            'dayOfTheWeek' => 'Thursday'
        ]);
        Connection::create([
            'airplaneId' => '1',
            'departureAirportId' => '2',
            'arrivalAirportId' => '1',
            'departureTime' => '17:50:00',
            'arrivalTime' => '19:10:00',
            'dayOfTheWeek' => 'Thursday'
        ]);
        Connection::create([
            'airplaneId' => '1',
            'departureAirportId' => '1',
            'arrivalAirportId' => '2',
            'departureTime' => '14:40:00',
            'arrivalTime' => '16:00:00',
            'dayOfTheWeek' => 'Monday'
        ]);
        Connection::create([
            'airplaneId' => '1',
            'departureAirportId' => '2',
            'arrivalAirportId' => '1',
            'departureTime' => '17:00:00',
            'arrivalTime' => '18:20:00',
            'dayOfTheWeek' => 'Monday'
        ]);
        // WAW to MUC
        Connection::create([
            'airplaneId' => '1',
            'departureAirportId' => '1',
            'arrivalAirportId' => '3',
            'departureTime' => '8:10:00',
            'arrivalTime' => '9:50:00',
            'dayOfTheWeek' => 'Wednesday'
        ]);
        Connection::create([
            'airplaneId' => '1',
            'departureAirportId' => '3',
            'arrivalAirportId' => '1',
            'departureTime' => '11:05:00',
            'arrivalTime' => '12:45:00',
            'dayOfTheWeek' => 'Wednesday'
        ]);
        Connection::create([
            'airplaneId' => '1',
            'departureAirportId' => '1',
            'arrivalAirportId' => '3',
            'departureTime' => '09:00:00',
            'arrivalTime' => '10:40:00',
            'dayOfTheWeek' => 'Sunday'
        ]);
        Connection::create([
            'airplaneId' => '1',
            'departureAirportId' => '3',
            'arrivalAirportId' => '1',
            'departureTime' => '12:20:00',
            'arrivalTime' => '14:00:00',
            'dayOfTheWeek' => 'Sunday'
        ]);
        // WAW to LGW
        Connection::create([
            'airplaneId' => '1',
            'departureAirportId' => '1',
            'arrivalAirportId' => '4',
            'departureTime' => '16:15:00',
            'arrivalTime' => '19:30:00',
            'dayOfTheWeek' => 'Tuesday'
        ]);
        Connection::create([
            'airplaneId' => '1',
            'departureAirportId' => '4',
            'arrivalAirportId' => '1',
            'departureTime' => '15:10:00',
            'arrivalTime' => '18:25:00',
            'dayOfTheWeek' => 'Tuesday'
        ]);
        Connection::create([
            'airplaneId' => '1',
            'departureAirportId' => '1',
            'arrivalAirportId' => '4',
            'departureTime' => '15:10:00',
            'arrivalTime' => '18:25:00',
            'dayOfTheWeek' => 'Saturday'
        ]);
        Connection::create([
            'airplaneId' => '1',
            'departureAirportId' => '4',
            'arrivalAirportId' => '1',
            'departureTime' => '19:30:00',
            'arrivalTime' => '22:45:00',
            'dayOfTheWeek' => 'Saturday'
        ]);
        // WAW to LIS
        Connection::create([
            'airplaneId' => '1',
            'departureAirportId' => '1',
            'arrivalAirportId' => '5',
            'departureTime' => '06:15:00',
            'arrivalTime' => '10:30:00',
            'dayOfTheWeek' => 'Saturday'
        ]);
        Connection::create([
            'airplaneId' => '1',
            'departureAirportId' => '1',
            'arrivalAirportId' => '5',
            'departureTime' => '12:10:00',
            'arrivalTime' => '16:25:00',
            'dayOfTheWeek' => 'Saturday'
        ]);
    }
}
