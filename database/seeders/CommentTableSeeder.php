<?php

namespace Database\Seeders;

use App\Models\Comment;
use Illuminate\Database\Seeder;

class CommentTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Comment::insert([
            ['name' => 'Stevani', 'message' => 'best tour with nice guy for last week,thanks'],
            ['name' => 'Raka Adi', 'message' => 'Terimakasih telah mengajak mengantakan keluarga kami menikmati Nusa Penida']
        ]);
    }
}
