<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Category;
use App\Models\Post;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        
        User::factory(10)->create();

        // User::create([
        //     'name' => 'Taufiq Alif Rahman',
        //     'email' => 'taufiq.alif0104@gmail.com',
        //     'password' => bcrypt('qwerty')
        // ]);

        // User::create([
        //     'name' => 'Alif Rahman',
        //     'email' => 'taufiq.alif@gmail.com',
        //     'password' => bcrypt('qwerty')
        // ]);

        Category::create([
            'name' => 'Web Desain',
            'slug' => 'web-desain'
        ]);

        Category::create([
            'name' => 'Web Programming',
            'slug' => 'web-programming'
        ]);

        Category::create([
            'name' => 'Personal',
            'slug' => 'personal'
        ]);

        Category::create([
            'name' => 'Programer',
            'slug' => 'programer'
        ]);

        Category::create([
            'name' => 'Student',
            'slug' => 'student'
        ]);

        Post::factory(30)->create();

    }
}