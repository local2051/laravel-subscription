<?php

namespace Database\Seeders;

use App\Models\Website;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class WebsiteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $websites = [
            ['name' => 'test website 1', 'url' => 'https://www.testsite1.com'],
            ['name' => 'test website 2', 'url' => 'https://www.testsite2.com'],
        ];

        foreach ($websites as $websiteData) {
            Website::create($websiteData);
        }
    }
}
