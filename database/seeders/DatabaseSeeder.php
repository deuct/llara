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
            'name' => 'Farhan Fadil',
            'username' => 'farhannfdl',
            'email' => 'farhan@gmail.com',
            'password' => bcrypt('12345')
        ]);

        User::factory(3)->create();

        Category::create([
            'name' => 'Web Programming',
            'slug' => "web-programming"
        ]);

        Category::create([
            'name' => 'Web Design',
            'slug' => "web-design"
        ]);

        Category::create([
            'name' => 'Personal',
            'slug' => "personal"
        ]);

        Post::factory(20)->create();

        // Post::create([
        //     'title' => 'Judul terakhir',
        //     'slug' => 'judul-pertama',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Neque officiis eum aliquid',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Magni, nam? Quos officiis eos voluptate consequuntur. Asperiores cumque accusamus aspernatur molestiae nisi voluptatem enim commodi perspiciatis temporibus, consequatur dolore deleniti ea et inventore nihil molestias. Ipsam dolores ipsa nihil odio perferendis qui laudantium? Accusantium laborum molestias veritatis culpa autem ullam, exercitationem ipsam magnam eius quibusdam, corporis fugiat perspiciatis voluptatum, aliquam laboriosam aspernatur quis eum placeat ab repudiandae nostrum! Neque in ipsam illo. Maiores labore deleniti ratione, explicabo laudantium reprehenderit. Sequi, numquam? Optio, quod! Dicta corporis earum est, eius culpa quas deleniti. Aut iusto ex enim totam temporibus minima expedita! Quidem non id eum iste rerum laudantium corrupti unde, accusantium labore iusto magnam totam aliquid perferendis dicta porro necessitatibus maxime. Illo, maxime.',
        //     'category_id' => 1,
        //     'user_id' => 1
        // ]);

        // Post::create([
        //     'title' => 'Judul Kedua',
        //     'slug' => 'judul-kedua',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Neque officiis eum aliquid',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Magni, nam? Quos officiis eos voluptate consequuntur. Asperiores cumque accusamus aspernatur molestiae nisi voluptatem enim commodi perspiciatis temporibus, consequatur dolore deleniti ea et inventore nihil molestias. Ipsam dolores ipsa nihil odio perferendis qui laudantium? Accusantium laborum molestias veritatis culpa autem ullam, exercitationem ipsam magnam eius quibusdam, corporis fugiat perspiciatis voluptatum, aliquam laboriosam aspernatur quis eum placeat ab repudiandae nostrum! Neque in ipsam illo. Maiores labore deleniti ratione, explicabo laudantium reprehenderit. Sequi, numquam? Optio, quod! Dicta corporis earum est, eius culpa quas deleniti. Aut iusto ex enim totam temporibus minima expedita! Quidem non id eum iste rerum laudantium corrupti unde, accusantium labore iusto magnam totam aliquid perferendis dicta porro necessitatibus maxime. Illo, maxime.',
        //     'category_id' => 1,
        //     'user_id' => 1
        // ]);

        // Post::create([
        //     'title' => 'Judul Ketiga',
        //     'slug' => 'judul-ketiga',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Neque officiis eum aliquid',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Magni, nam? Quos officiis eos voluptate consequuntur. Asperiores cumque accusamus aspernatur molestiae nisi voluptatem enim commodi perspiciatis temporibus, consequatur dolore deleniti ea et inventore nihil molestias. Ipsam dolores ipsa nihil odio perferendis qui laudantium? Accusantium laborum molestias veritatis culpa autem ullam, exercitationem ipsam magnam eius quibusdam, corporis fugiat perspiciatis voluptatum, aliquam laboriosam aspernatur quis eum placeat ab repudiandae nostrum! Neque in ipsam illo. Maiores labore deleniti ratione, explicabo laudantium reprehenderit. Sequi, numquam? Optio, quod! Dicta corporis earum est, eius culpa quas deleniti. Aut iusto ex enim totam temporibus minima expedita! Quidem non id eum iste rerum laudantium corrupti unde, accusantium labore iusto magnam totam aliquid perferendis dicta porro necessitatibus maxime. Illo, maxime.',
        //     'category_id' => 2,
        //     'user_id' => 1
        // ]);

    }
}
