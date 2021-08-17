<?php

use Illuminate\Database\Seeder;
use App\Productos;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        factory(Productos::class, 5)->create();
    }
}
