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
        User::create([
            'name' => 'Ikhsan Nusaly',
            'username' => 'ikhsanskuy',
            'email' => 'ikhsan@gmail.com',
            'password' => bcrypt('password')
        ]);
        User::factory(3)->create();

        Category::create([
            'name' => 'Web Programming',
            'slug' => 'web-programming'
        ]);
        Category::create([
            'name' => 'Web design',
            'slug' => 'web-design'
        ]);
        Category::create([
            'name' => 'Personal',
            'slug' => 'personal'
        ]);

        Post::factory(20)->create();

        // Post::create([
        //     'title' => 'Judul Pertama',
        //     'slug' => 'judul-pertama',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Nesciunt iusto, nulla necessitatibus expedita nemo qui cumque maxime assumenda dolorem?',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Nesciunt iusto, nulla necessitatibus expedita nemo qui cumque maxime assumenda dolorem? Quaerat, minus dolorem itaque quisquam quia non deleniti tenetur, asperiores sunt aliquid excepturi aperiam labore laudantium dolore reprehenderit assumenda id eveniet? Atque vero magni, blanditiis eaque, rerum incidunt obcaecati, quis perspiciatis praesentium culpa unde. Quibusdam veniam pariatur quod velit quae autem, praesentium consequuntur tempora. Ut ullam dignissimos nostrum eligendi asperiores at iure, unde, neque, distinctio reprehenderit in est ipsam sed? Sint architecto veritatis officiis vel nostrum laborum quis voluptatum praesentium excepturi voluptas quas nulla, culpa fugiat accusamus, iure ipsum enim fuga.',
        //     'category_id' => 1,
        //     'user_id' => 1
        // ]);

        // Post::create([
        //     'title' => 'Judul Kedua',
        //     'slug' => 'judul-kedua',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Nesciunt iusto, nulla necessitatibus expedita nemo qui cumque maxime assumenda dolorem?',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Nesciunt iusto, nulla necessitatibus expedita nemo qui cumque maxime assumenda dolorem? Quaerat, minus dolorem itaque quisquam quia non deleniti tenetur, asperiores sunt aliquid excepturi aperiam labore laudantium dolore reprehenderit assumenda id eveniet? Atque vero magni, blanditiis eaque, rerum incidunt obcaecati, quis perspiciatis praesentium culpa unde. Quibusdam veniam pariatur quod velit quae autem, praesentium consequuntur tempora. Ut ullam dignissimos nostrum eligendi asperiores at iure, unde, neque, distinctio reprehenderit in est ipsam sed? Sint architecto veritatis officiis vel nostrum laborum quis voluptatum praesentium excepturi voluptas quas nulla, culpa fugiat accusamus, iure ipsum enim fuga.',
        //     'category_id' => 1,
        //     'user_id' => 1
        // ]);

        // Post::create([
        //     'title' => 'Judul Ketiga',
        //     'slug' => 'judul-ketiga',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Nesciunt iusto, nulla necessitatibus expedita nemo qui cumque maxime assumenda dolorem?',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Nesciunt iusto, nulla necessitatibus expedita nemo qui cumque maxime assumenda dolorem? Quaerat, minus dolorem itaque quisquam quia non deleniti tenetur, asperiores sunt aliquid excepturi aperiam labore laudantium dolore reprehenderit assumenda id eveniet? Atque vero magni, blanditiis eaque, rerum incidunt obcaecati, quis perspiciatis praesentium culpa unde. Quibusdam veniam pariatur quod velit quae autem, praesentium consequuntur tempora. Ut ullam dignissimos nostrum eligendi asperiores at iure, unde, neque, distinctio reprehenderit in est ipsam sed? Sint architecto veritatis officiis vel nostrum laborum quis voluptatum praesentium excepturi voluptas quas nulla, culpa fugiat accusamus, iure ipsum enim fuga.',
        //     'category_id' => 2,
        //     'user_id' => 2
        // ]);
    }
}
