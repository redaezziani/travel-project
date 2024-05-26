<?php

namespace Database\Seeders;

use App\Models\Trip;
use Illuminate\Database\Seeder;

class TripSeeder extends Seeder
{
    public function run()
    {
        $trips = [
            [
                'name' => 'Exotic Beach Getaway',
                'description' => 'Escape to a tropical paradise with pristine beaches and crystal-clear waters.',
                'price' => 1500.00,
                'seats' => 20,
                'supervisor' => 'John Doe',
                'image' => 'trips/beach-getaway.jpg',
                'destination' => 'Maldives',
                'category' => 'Beach',
                'is_featured' => true,
                'is_started' => false,
                'start_date' => '2023-07-01',
                'end_date' => '2023-07-08',
            ],
            [
                'name' => 'Mountain Adventure',
                'description' => 'Embark on a thrilling adventure in the majestic mountains with breathtaking views.',
                'price' => 1200.00,
                'seats' => 15,
                'supervisor' => 'Jane Smith',
                'image' => 'trips/mountain-adventure.jpg',
                'destination' => 'Swiss Alps',
                'category' => 'Adventure',
                'is_featured' => false,
                'is_started' => false,
                'start_date' => '2023-08-15',
                'end_date' => '2023-08-22',
            ],
            [
                'name' => 'Cultural Heritage Tour',
                'description' => 'Immerse yourself in the rich history and cultural heritage of ancient civilizations.',
                'price' => 1800.00,
                'seats' => 25,
                'supervisor' => 'Michael Johnson',
                'image' => 'trips/cultural-heritage.jpg',
                'destination' => 'Egypt',
                'category' => 'Cultural',
                'is_featured' => true,
                'is_started' => false,
                'start_date' => '2023-09-10',
                'end_date' => '2023-09-20',
            ],
            [
                'name' => 'Wildlife Safari',
                'description' => 'Witness the incredible wildlife and stunning landscapes of the African savannah.',
                'price' => 2000.00,
                'seats' => 12,
                'supervisor' => 'Sarah Thompson',
                'image' => 'trips/wildlife-safari.jpg',
                'destination' => 'Kenya',
                'category' => 'Safari',
                'is_featured' => false,
                'is_started' => false,
                'start_date' => '2023-10-05',
                'end_date' => '2023-10-15',
            ],
            [
                'name' => 'Island Hopping Cruise',
                'description' => 'Set sail on a luxurious cruise and discover the enchanting islands of the Caribbean.',
                'price' => 2500.00,
                'seats' => 30,
                'supervisor' => 'David Wilson',
                'image' => 'trips/island-hopping.jpg',
                'destination' => 'Caribbean',
                'category' => 'Cruise',
                'is_featured' => true,
                'is_started' => false,
                'start_date' => '2023-11-01',
                'end_date' => '2023-11-10',
            ],
        ];

        foreach ($trips as $trip) {
            Trip::create($trip);
        }
    }
}
