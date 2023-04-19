<?php

namespace App\Models\Posts;

use Illuminate\Database\Eloquent\Model;

class Like extends Model
{
    const UPDATED_AT = null;

    protected $fillable = [
        'like_user_id',
        'like_post_id'
    ];

    public function likeCounts($post_id){
        return $this->where('like_post_id', $post_id)->get()->count();
    }// like_post_idカラムの値が$post_idと一致する値を全て取得し、count()メソッドでレコードの数を取得する
}
