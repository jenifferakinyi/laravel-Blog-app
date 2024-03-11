<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Listing;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        \App\Models\User::factory(5)->create();

        Listing::factory(6)->create();

// Listing::create([
//     'title' => 'Senior Software Developer',
//     'tags' => 'PHP, Laravel, JavaScript',
//     'company' => 'TechCo Solutions',
//     'location' => 'New York, USA',
//     'email' => 'info@techco.com',
//     'website' => 'https://www.techco.com',
//     'description' => 'We are looking for an experienced Senior Software Developer to join our dynamic team...',
// ]);

// Listing::create([
//     'title' => 'UX/UI Designer',
//     'tags' => 'UI/UX, Adobe XD, Sketch',
//     'company' => 'DesignHub',
//     'location' => 'San Francisco, USA',
//     'email' => 'hr@designhub.com',
//     'website' => 'https://www.designhub.com',
//     'description' => 'DesignHub is seeking a talented and creative UX/UI Designer to enhance the user experience of our products...',
// ]);

// Listing::create([
//     'title' => 'Marketing Specialist',
//     'tags' => 'Digital Marketing, SEO, Social Media',
//     'company' => 'MarketPro Agency',
//     'location' => 'London, UK',
//     'email' => 'careers@marketpro.com',
//     'website' => 'https://www.marketpro.com',
//     'description' => 'Join our marketing team and play a key role in developing and implementing effective marketing strategies...',
// ]);


        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
