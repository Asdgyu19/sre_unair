<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Category;
use Illuminate\Support\Str;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categories = [
            [
                'name' => 'Environment',
                'description' => 'Environmental awareness and sustainability topics',
                'color' => '#10B981', // Green
            ],
            [
                'name' => 'Education',
                'description' => 'Educational content and learning resources',
                'color' => '#3B82F6', // Blue
            ],
            [
                'name' => 'Technology',
                'description' => 'Technology and innovation in renewable energy',
                'color' => '#8B5CF6', // Purple
            ],
            [
                'name' => 'Community',
                'description' => 'Community events and social activities',
                'color' => '#F59E0B', // Yellow
            ],
            [
                'name' => 'Research',
                'description' => 'Research findings and academic content',
                'color' => '#EF4444', // Red
            ],
        ];

        foreach ($categories as $category) {
            Category::updateOrCreate(
                ['name' => $category['name']],
                [
                    'slug' => Str::slug($category['name']),
                    'description' => $category['description'],
                    'color' => $category['color'],
                ]
            );
        }
    }
}