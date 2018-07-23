<?php

use App\Models\Category;
use Illuminate\Database\Seeder;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $categories = [
            [
                'name' => 'Art & Design',
            ],
            [
                'name' => 'Auto & Vehicles',
            ],
            [
                'name' => 'Beauty',
            ],
            [
                'name' => 'Books',
            ],
            [
                'name' => 'Business',
            ],
            [
                'name' => 'Comics',
            ],
            [
                'name' => 'Catalogs',
            ],
            [
                'name' => 'Dating',
            ],
            [
                'name' => 'Education',
            ],
            [
                'name' => 'Entertainment',
            ],
            [
                'name' => 'Events',
            ],
            [
                'name' => 'Finance',
            ],
            [
                'name' => 'Food & Drink',
            ],
            [
                'name' => 'Games',
            ],
            [
                'name' => 'Health & Fitness',
            ],
            [
                'name' => 'House & Home',
            ],
            [
                'name' => 'Lifestyle',
            ],
            [
                'name' => 'Magazines & Newspapers',
            ],
            [
                'name' => 'Medical',
            ],
            [
                'name' => 'Music',
            ],
            [
                'name' => 'Navigation',
            ],
            [
                'name' => 'News',
            ],
            [
                'name' => 'Reference',
            ],
            [
                'name' => 'Shopping',
            ],
            [
                'name' => 'Social Networking',
            ],
            [
                'name' => 'Sports',
            ],
            [
                'name' => 'Travel',
            ],
            [
                'name' => 'Utilities',
            ],
            [
                'name' => 'Weather',
            ],
        ];

        foreach ($categories as $category) {
//            $category['description'] = $category['name'];
            Category::create($category);
        }
    }
}
