<?php

namespace Database\Seeders;

use App\Models\category;
use App\Models\product;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
     User::factory(10)->create();

     product::factory(10)->create();

    }
}
