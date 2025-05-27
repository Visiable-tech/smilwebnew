<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = [
        'user_id', 'post_type', 'slug', 'title', 'content', 'expert', 'image',
        'image_alt', 'blog_date', 'is_front_page', 'template', 'status'
    ];

    public function meta()
    {
        return $this->hasOne(PostMetaElement::class, 'post_id');
    }
}
