<?php

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
        $this->call(AppTypesTableSeeder::class);
        $this->call(CategoriesTableSeeder::class);
        $this->call(CountriesTableSeeder::class);
        $this->call(StatesTableSeeder::class);
    }
}
