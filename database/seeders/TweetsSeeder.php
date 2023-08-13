<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TweetsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(){
        DB::table('tweets')->insert([
        'name' => 'Shaker Al-Mauzini',
        'handle' => '@johnniward',
        'image' => 'https://randomuser.me/api/portraits/men/44.jpg',
        'tweet' => "We went rock climbing this weekend? Here is the video. Climbing is way more fun than exercising on any gym equipment. It works both your mind and body. Best of all it trains you to be creative and think out of the box. It's also an ongoing competition with yourself as you aim to improve your performance. ENJOY!",
        'file' => '/videos/Sportsman.mp4',
        'is_video' => true,
        'comments' => '35',
        'retweets' => '44',
        'likes' => '48',
        'analytics' => '91',
        'created_at' => Carbon::now(),
        'updated_at' => Carbon::now()
    ]);
    }
}
