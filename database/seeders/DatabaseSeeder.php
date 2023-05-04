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
            'name' => 'Gabriel Rolly',
            'username' => 'gabrielrd',
            'email' => 'gabriel@gmail.com',
            'password' => bcrypt('12345')
        ]);

        // User::create([
        //     'name' => 'Gabriel Rolly',
        //     'email' => 'geery@gmail.com',
        //     'password' => bcrypt('54321')
        // ]);

        User::factory(3)->create();
        
        Category::create([
            'name' => 'Web Programming',
            'slug' => 'web-programming'
        ]);
  
        Category::create([
            'name' => 'Design Interior',
            'slug' => 'design-interior'
        ]);
        
        Category::create([
            'name' => 'Personal',
            'slug' => 'personal'
        ]);

        Post::factory(10)->create();

        // Post::create([
        //     'title' => 'Judul Pertama',
        //     'slug' => 'judul-pertama',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Repudiandae nesciunt, sequi incidunt optio quaerat a.',

        //     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Repudiandae nesciunt, sequi incidunt optio quaerat a. Eius facilis, nemo expedita sint excepturi dolore magni quam animi officia nobis eligendi velit maxime esse iure sit consequatur sunt? Distinctio dicta aliquid voluptate soluta voluptatum? Sint voluptatem mollitia suscipit. Optio eveniet voluptatum iusto corporis? Inventore similique recusandae quisquam dolorem officia modi cumque fugit molestias, commodi voluptas, necessitatibus harum rem tempora eum eius ea optio perspiciatis consectetur sit placeat. Amet, omnis. Quod doloremque illum, totam alias iusto asperiores ipsa rerum iste natus, temporibus odit tempore voluptates porro mollitia beatae aperiam velit sit numquam vitae optio?',
        //     'category_id' => 1,
        //     'user_id' => 1
        // ]);

        // Post::create([
        //     'title' => 'Judul Kedua',
        //     'slug' => 'judul-kedua',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Repudiandae nesciunt, sequi incidunt optio quaerat a.',

        //     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Repudiandae nesciunt, sequi incidunt optio quaerat a. Eius facilis, nemo expedita sint excepturi dolore magni quam animi officia nobis eligendi velit maxime esse iure sit consequatur sunt? Distinctio dicta aliquid voluptate soluta voluptatum? Sint voluptatem mollitia suscipit. Optio eveniet voluptatum iusto corporis? Inventore similique recusandae quisquam dolorem officia modi cumque fugit molestias, commodi voluptas, necessitatibus harum rem tempora eum eius ea optio perspiciatis consectetur sit placeat. Amet, omnis. Quod doloremque illum, totam alias iusto asperiores ipsa rerum iste natus, temporibus odit tempore voluptates porro mollitia beatae aperiam velit sit numquam vitae optio?',
        //     'category_id' => 1,
        //     'user_id' => 1
        // ]);

        // Post::create([
        //     'title' => 'Judul Ketiga',
        //     'slug' => 'judul-ketiga',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Repudiandae nesciunt, sequi incidunt optio quaerat a.',

        //     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Repudiandae nesciunt, sequi incidunt optio quaerat a. Eius facilis, nemo expedita sint excepturi dolore magni quam animi officia nobis eligendi velit maxime esse iure sit consequatur sunt? Distinctio dicta aliquid voluptate soluta voluptatum? Sint voluptatem mollitia suscipit. Optio eveniet voluptatum iusto corporis? Inventore similique recusandae quisquam dolorem officia modi cumque fugit molestias, commodi voluptas, necessitatibus harum rem tempora eum eius ea optio perspiciatis consectetur sit placeat. Amet, omnis. Quod doloremque illum, totam alias iusto asperiores ipsa rerum iste natus, temporibus odit tempore voluptates porro mollitia beatae aperiam velit sit numquam vitae optio?',
        //     'category_id' => 2,
        //     'user_id' => 1
        // ]);

        // Post::create([
        //     'title' => 'Judul Keempat',
        //     'slug' => 'judul-keempat',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Repudiandae nesciunt, sequi incidunt optio quaerat a.',

        //     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Repudiandae nesciunt, sequi incidunt optio quaerat a. Eius facilis, nemo expedita sint excepturi dolore magni quam animi officia nobis eligendi velit maxime esse iure sit consequatur sunt? Distinctio dicta aliquid voluptate soluta voluptatum? Sint voluptatem mollitia suscipit. Optio eveniet voluptatum iusto corporis? Inventore similique recusandae quisquam dolorem officia modi cumque fugit molestias, commodi voluptas, necessitatibus harum rem tempora eum eius ea optio perspiciatis consectetur sit placeat. Amet, omnis. Quod doloremque illum, totam alias iusto asperiores ipsa rerum iste natus, temporibus odit tempore voluptates porro mollitia beatae aperiam velit sit numquam vitae optio?',
        //     'category_id' => 2,
        //     'user_id' => 2
        // ]);

    }
}
