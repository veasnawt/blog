<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Post extends Model
{

    use SoftDeletes;

    protected $guarded = [];

    protected static function boot()
    {
        parent::boot();

        self::creating(function ($post) {
            $post->user_id = auth()->user()->id;
        });

        self::creating(function ($post) {
            $post->category_id = 1;
        });
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function category() {
        return $this->hasOne(Category::class);
    }
}
