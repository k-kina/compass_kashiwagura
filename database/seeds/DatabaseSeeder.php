<?php

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
        $this->call(UsersTableSeeder::class);//呼び出すように追加
        $this->call(SubjectsTableSeeder::class);
        $this->call(PostsTableSeeder::class);


    }

}
