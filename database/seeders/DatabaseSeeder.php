<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Articulos;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\User::factory(150)->create();

    }
}
