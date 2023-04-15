<?php

use Illuminate\Database\Seeder;
use App\Models\Posts\Post;

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //投稿内容とタイトル初期値
        DB::table('posts')->insert([
            'post_title'=> 'おすすめの英語参考書',
            'post'=> 'おすすめの英語参考書を紹介します！',
        ]);
    }
}
