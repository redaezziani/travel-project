<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class CommentsTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('comments')->insert([
            [
                'user_id' => 2,
                'trip_id' => 3,
                'content' => 'This trip was an incredible experience! The landscapes were breathtaking and the culture was so rich.',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'user_id' => 2,
                'trip_id' => 3,
                'content' => 'The Sahara Desert excursion was the highlight of the trip. Highly recommend!',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'user_id' => 2,
                'trip_id' => 3,
                'content' => 'A perfect mix of adventure and relaxation. The guided tours were very informative.',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
        ]);
    }
}
