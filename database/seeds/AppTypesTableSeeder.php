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
                'slug' => 'web-application',
                'description' => 'Web Application',
            ],
            [
                'name' => 'Desktop Application',
                'slug' => 'desktop-application',
                'description' => 'Desktop Application',
            ],
            [
                'name' => 'Mobile & tablet Application',
                'slug' => 'mobile-tablet-application',
                'description' => 'Mobile & tablet Application',
            ]
        ];
        foreach ($appTypes as $appType) {
            AppType::create($appType);
        }
    }
}
