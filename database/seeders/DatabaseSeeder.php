<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Post;
use App\Models\Category;
use App\Models\User;

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
            'name' => 'Ardiansah',
            'username' => 'Ardians109',
            'email'=> 'ard5070@gmail.com',
            'password' => bcrypt('12345')
        ]);

        // User::create([
        //     'name' => 'Katarina Utari Dewi',
        //     'email'=> 'katarina@gmail.com',
        //     'password' => bcrypt('12345')
        // ]);
        User::factory(3)->create();

        Category::create([
            'name' => 'Web Programming',
            'slug' => 'web-programming'
        ]);

        Category::create([
            'name' => 'Web Design',
            'slug' => 'web-design'
        ]);

        Category::create([
            'name' => 'Personal',
            'slug' => 'personal'
        ]);


        Post::factory(20)->create();

        // Post::create([
        //     "category_id" => 1,
        //     "user_id"     => 1,
        //     "title" => "Judul Pertama",
        //     "slug"  => "judul-pertama",
        //     "excerpt" => "lorem ipsum pertama",
        //     "body" => "<p>ipsum dolor, sit amet consectetur adipisicing elit. Consequatur quidem numquam odit saepe? Voluptatum aut explicabo
        //     eum. Qui reprehenderit suscipit minima, vel sunt, quod obcaecati tempora repellendus molestias, soluta ipsam. Possimus ullam molestiae,</p> <p> repellendus aspernatur porro error corrupti perspiciatis alias dolorem reprehenderit dicta corporis laboriosam assumenda dignissimos illum dolor recusandae dolores veniam? Sint dolor at, velit deleniti soluta laudantium ut quam, dolorum voluptatibus nihil magni tenetur. Molestias, quam? Voluptates molestias eius debitis. Laudantium suscipit accusamus veritatis voluptatibus, quos, nemo necessitatibus quasi quod nostrum dolore perferendis adipisci doloremque ipsam minus cupiditate est error nisi, quo aut. Possimus enim totam voluptatibus saepe?Lorem ipsum dolor sit amet consectetur adipisicing elit. Nihil ipsam saepe error cumque, repellendus officiis eligendi autem modi quam asperiores!</p>"
        // ]);

        // Post::create([
        //     "category_id" => 1,
        //     "user_id"     => 2,
        //     "title" => "Judul Ke Dua",
        //     "slug"  => "judul-ke-dua",
        //     "excerpt" => "lorem ipsum ke dua",
        //     "body" => "<p>ipsum dolor, sit amet consectetur adipisicing elit. Consequatur quidem numquam odit saepe? Voluptatum aut explicabo
        //     eum. Qui reprehenderit suscipit minima, vel sunt, quod obcaecati tempora repellendus molestias, soluta ipsam. Possimus ullam molestiae,</p> <p> repellendus aspernatur porro error corrupti perspiciatis alias dolorem reprehenderit dicta corporis laboriosam assumenda dignissimos illum dolor recusandae dolores veniam? Sint dolor at, velit deleniti soluta laudantium ut quam, dolorum voluptatibus nihil magni tenetur. Molestias, quam? Voluptates molestias eius debitis. Laudantium suscipit accusamus veritatis voluptatibus, quos, nemo necessitatibus quasi quod nostrum dolore perferendis adipisci doloremque ipsam minus cupiditate est error nisi, quo aut. Possimus enim totam voluptatibus saepe?Lorem ipsum dolor sit amet consectetur adipisicing elit. Nihil ipsam saepe error cumque, repellendus officiis eligendi autem modi quam asperiores!</p>"
        // ]);

        // Post::create([
        //     "category_id" => 2,
        //     "user_id"     => 2,
        //     "title" => "Judul ke Tiga",
        //     "slug"  => "judul-ke-tiga",
        //     "excerpt" => "lorem ipsum ke tiga",
        //     "body" => "<p>ipsum dolor, sit amet consectetur adipisicing elit. Consequatur quidem numquam odit saepe? Voluptatum aut explicabo
        //     eum. Qui reprehenderit suscipit minima, vel sunt, quod obcaecati tempora repellendus molestias, soluta ipsam. Possimus ullam molestiae,</p> <p> repellendus aspernatur porro error corrupti perspiciatis alias dolorem reprehenderit dicta corporis laboriosam assumenda dignissimos illum dolor recusandae dolores veniam? Sint dolor at, velit deleniti soluta laudantium ut quam, dolorum voluptatibus nihil magni tenetur. Molestias, quam? Voluptates molestias eius debitis. Laudantium suscipit accusamus veritatis voluptatibus, quos, nemo necessitatibus quasi quod nostrum dolore perferendis adipisci doloremque ipsam minus cupiditate est error nisi, quo aut. Possimus enim totam voluptatibus saepe?Lorem ipsum dolor sit amet consectetur adipisicing elit. Nihil ipsam saepe error cumque, repellendus officiis eligendi autem modi quam asperiores!</p>"
        // ]);
    }
}
