<?php

namespace Database\Seeders;

use App\Models\Booking;
use Illuminate\Database\Seeder;

class BookingsTableSeeder extends Seeder
{
    public function run()
    {
        $userId = 2;
        $tripId = 3;

        for ($i = 1; $i <= 15; $i++) {
            Booking::create([
                'user_id' => $userId,
                'trip_id' => $tripId,
                'seats' => rand(1, 5),
                'total_price' => rand(100, 1000),
            ]);
        }
    }
}
