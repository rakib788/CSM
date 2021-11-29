<?php

namespace Database\Seeders;

use App\Models\service;
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
        $this->call(UserSeeder::class);

        service::factory()->count(5)->create();
    }
}
