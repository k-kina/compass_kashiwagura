<?php

use Illuminate\Database\Seeder;
use App\Models\Users\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //ユーザー初期設定
        DB::table('users')->insert([
            'over_name' => '柏倉',
            'under_name' => '希奈',
            'over_name_kana' => 'カシワグラ',
            'under_name_kana' => 'キナ',
            'mail_address' => 'kina0909@yahoo.co.jp',
            'sex'=> '2',
            'birth_day' => '1997/09/09',
            'role' => '3',
            'password' => bcrypt('kina0909'),
        ]);

    }
}
