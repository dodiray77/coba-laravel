<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Category;
use App\Models\Post;
class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        User::create([
            'name' => 'Dodi Ray',
            'email' => 'dodi@gmail.com',
            'password' => bcrypt('12345')
        ]);

        User::create([
            'name' => 'Mr.R',
            'email' => 'Mr-R@gmail.com',
            'password' => bcrypt('12345')
        ]);

        Category::create([
            'name' => 'Web Programming',
            'slug' => 'web-programming',
        ]);
        Category::create([
            'name' => 'Personal',
            'slug' => 'personal',
        ]);

        Post::create([
            'title' => 'Judul Pertama',
            'slug' => 'judul-pertama',
            'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Iure nam placeat quibusdam praesentium nemo quo incidunt cum quia porro, veniam ipsa omnis? Minus atque quis, laborum dolorem provident eius neque numquam reiciendis aspernatur sed repellat amet consequatur minima distinctio incidunt culpa natus tempora,',
            'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Iure nam placeat quibusdam praesentium nemo quo incidunt cum quia porro, veniam ipsa omnis? Minus atque quis, laborum dolorem provident eius neque numquam reiciendis aspernatur sed repellat amet consequatur minima distinctio incidunt culpa natus tempora, sint ratione nisi quod ex at deleniti. Aliquam quos accusantium quia doloremque tempore repudiandae amet nesciunt dolores ab, veritatis voluptatibus repellat incidunt architecto dolorem impedit aut sapiente voluptatem quaerat. Aspernatur ratione asperiores nesciunt itaque nisi commodi laudantium quam, ipsa pariatur, quibusdam inventore expedita perferendis odio neque iusto tenetur. Iste amet consequuntur quisquam quaerat dolore, ab suscipit sit, voluptatum dolorum corrupti accusamus dolores assumenda vitae reiciendis modi, sed harum autem? Eos optio corporis porro accusantium nemo molestias, vero dicta ullam quod sint odio voluptatum inventore qui officia, neque, itaque numquam! Commodi cum, sint, nesciunt esse tempore ipsam, magnam rem eveniet quisquam ducimus molestiae unde autem aspernatur molestias inventore.',
            'category_id' => 1,
            'user_id' => 1
        ]);
        Post::create([
            'title' => 'Judul Kedua',
            'slug' => 'judul-kedua',
            'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Iure nam placeat quibusdam praesentium nemo quo incidunt cum quia porro, veniam ipsa omnis? Minus atque quis, laborum dolorem provident eius neque numquam reiciendis aspernatur sed repellat amet consequatur minima distinctio incidunt culpa natus tempora,',
            'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Iure nam placeat quibusdam praesentium nemo quo incidunt cum quia porro, veniam ipsa omnis? Minus atque quis, laborum dolorem provident eius neque numquam reiciendis aspernatur sed repellat amet consequatur minima distinctio incidunt culpa natus tempora, sint ratione nisi quod ex at deleniti. Aliquam quos accusantium quia doloremque tempore repudiandae amet nesciunt dolores ab, veritatis voluptatibus repellat incidunt architecto dolorem impedit aut sapiente voluptatem quaerat. Aspernatur ratione asperiores nesciunt itaque nisi commodi laudantium quam, ipsa pariatur, quibusdam inventore expedita perferendis odio neque iusto tenetur. Iste amet consequuntur quisquam quaerat dolore, ab suscipit sit, voluptatum dolorum corrupti accusamus dolores assumenda vitae reiciendis modi, sed harum autem? Eos optio corporis porro accusantium nemo molestias, vero dicta ullam quod sint odio voluptatum inventore qui officia, neque, itaque numquam! Commodi cum, sint, nesciunt esse tempore ipsam, magnam rem eveniet quisquam ducimus molestiae unde autem aspernatur molestias inventore.',
            'category_id' => 1,
            'user_id' => 1
        ]);
        Post::create([
            'title' => 'Judul Ketiga',
            'slug' => 'judul-ketiga',
            'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Iure nam placeat quibusdam praesentium nemo quo incidunt cum quia porro, veniam ipsa omnis? Minus atque quis, laborum dolorem provident eius neque numquam reiciendis aspernatur sed repellat amet consequatur minima distinctio incidunt culpa natus tempora,',
            'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Iure nam placeat quibusdam praesentium nemo quo incidunt cum quia porro, veniam ipsa omnis? Minus atque quis, laborum dolorem provident eius neque numquam reiciendis aspernatur sed repellat amet consequatur minima distinctio incidunt culpa natus tempora, sint ratione nisi quod ex at deleniti. Aliquam quos accusantium quia doloremque tempore repudiandae amet nesciunt dolores ab, veritatis voluptatibus repellat incidunt architecto dolorem impedit aut sapiente voluptatem quaerat. Aspernatur ratione asperiores nesciunt itaque nisi commodi laudantium quam, ipsa pariatur, quibusdam inventore expedita perferendis odio neque iusto tenetur. Iste amet consequuntur quisquam quaerat dolore, ab suscipit sit, voluptatum dolorum corrupti accusamus dolores assumenda vitae reiciendis modi, sed harum autem? Eos optio corporis porro accusantium nemo molestias, vero dicta ullam quod sint odio voluptatum inventore qui officia, neque, itaque numquam! Commodi cum, sint, nesciunt esse tempore ipsam, magnam rem eveniet quisquam ducimus molestiae unde autem aspernatur molestias inventore.',
            'category_id' => 2,
            'user_id' => 1
        ]);
        Post::create([
            'title' => 'Judul Keempat',
            'slug' => 'judul-keempat',
            'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Iure nam placeat quibusdam praesentium nemo quo incidunt cum quia porro, veniam ipsa omnis? Minus atque quis, laborum dolorem provident eius neque numquam reiciendis aspernatur sed repellat amet consequatur minima distinctio incidunt culpa natus tempora,',
            'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Iure nam placeat quibusdam praesentium nemo quo incidunt cum quia porro, veniam ipsa omnis? Minus atque quis, laborum dolorem provident eius neque numquam reiciendis aspernatur sed repellat amet consequatur minima distinctio incidunt culpa natus tempora, sint ratione nisi quod ex at deleniti. Aliquam quos accusantium quia doloremque tempore repudiandae amet nesciunt dolores ab, veritatis voluptatibus repellat incidunt architecto dolorem impedit aut sapiente voluptatem quaerat. Aspernatur ratione asperiores nesciunt itaque nisi commodi laudantium quam, ipsa pariatur, quibusdam inventore expedita perferendis odio neque iusto tenetur. Iste amet consequuntur quisquam quaerat dolore, ab suscipit sit, voluptatum dolorum corrupti accusamus dolores assumenda vitae reiciendis modi, sed harum autem? Eos optio corporis porro accusantium nemo molestias, vero dicta ullam quod sint odio voluptatum inventore qui officia, neque, itaque numquam! Commodi cum, sint, nesciunt esse tempore ipsam, magnam rem eveniet quisquam ducimus molestiae unde autem aspernatur molestias inventore.',
            'category_id' => 2,
            'user_id' => 2
        ]);
    }
}
