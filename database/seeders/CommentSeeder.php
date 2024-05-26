<?php

namespace Database\Seeders;

use App\Models\Comment;
use App\Models\Trip;
use App\Models\User;
use Illuminate\Database\Seeder;

class CommentSeeder extends Seeder
{
    public function run()
    {
        $trips = Trip::all();
        $users = User::all();

        foreach ($trips as $trip) {
            $commentsCount = rand(1, 5);

            for ($i = 0; $i < $commentsCount; $i++) {
                $user = $users->random();

                Comment::create([
                    'user_id' => $user->id,
                    'trip_id' => $trip->id,
                    'content' => $this->generateRandomComment(),
                ]);
            }
        }
    }

    private function generateRandomComment()
    {
        $comments = [
            'Great trip! I had an amazing time.',
            'The destination was breathtaking. Highly recommended!',
            'The itinerary was well-planned. Enjoyed every moment.',
            'The accommodations were top-notch. Comfortable and luxurious.',
            'The tour guide was knowledgeable and friendly. Made the trip even better.',
            'An unforgettable experience. Can\'t wait to go on another trip!',
            'The food was delicious. Tried so many new dishes.',
            'Met some wonderful people on this trip. Made great memories.',
            'The activities were fun and exciting. Never a dull moment.',
            'The scenery was stunning. Captured some incredible photos.',
        ];

        return $comments[array_rand($comments)];
    }
}
