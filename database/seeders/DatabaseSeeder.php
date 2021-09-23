<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // Creates the first user to log in automatically while in early development
        $new_user = User::create(['name' => 'dzejkob1218', 'password' => 'password', 'email' => 'example@void.com']);
        $new_user = User::create(['name' => 'notMe', 'password' => 'password', 'email' => 'exampl2e@void.com']);

        Category::factory(50)->create();


        foreach (Category::all()->slice(10) as $cat){
            $cat->category_id = rand(1,9);
            $cat->save();
        }
    }
}
