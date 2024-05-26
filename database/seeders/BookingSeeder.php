<?php

namespace Database\Seeders;

use App\Models\Booking;
use App\Models\Trip;
use Illuminate\Database\Seeder;

class BookingSeeder extends Seeder
{
    public function run()
    {
        $trips = Trip::all();
        $userId = 2; // Your user ID

        foreach ($trips as $trip) {
            $bookingsCount = rand(1, 5);

            for ($i = 0; $i < $bookingsCount; $i++) {
                $seats = rand(1, $trip->seats);

                Booking::create([
                    'user_id' => $userId,
                    'trip_id' => $trip->id,
                ]);
            }
        }
    }
}
