<?php

use App\Models\AppType;
use Illuminate\Database\Seeder;

class AppTypesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $appTypes = [
            [
                'name' => 'Web Application',
                'description' => 'Web Application',
            ],
            [
                'name' => 'Desktop Application',
                'description' => 'Desktop Application',
            ],
            [
                'name' => 'Mobile & tablet Application',
                'description' => 'Mobile & tablet Application',
            ]
        ];
        foreach ($appTypes as $appType) {
            AppType::create($appType);
        }
    }
}
