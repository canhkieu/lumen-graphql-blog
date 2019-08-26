<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'title', 'description', 'content',
    ];

    /**
     * Lấy tất cả bài viết của thành viên
     */
    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
