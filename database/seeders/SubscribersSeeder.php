<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Subscribers;

class SubscribersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        Subscribers::factory(10)->create();
    }
}
