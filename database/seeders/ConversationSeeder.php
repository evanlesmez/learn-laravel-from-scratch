<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Conversation;
use App\Models\Reply;

class ConversationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Conversation::factory()
           ->count(10)
           ->create();
        Reply::factory()
            ->count(20)
            ->create();
    }
}
