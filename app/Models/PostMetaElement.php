<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PostMetaElement extends Model
{
    protected $fillable = [
        'post_id', 'seo_title', 'description', 'keywords', 'robots', 'revisit_after',
        'og_locale', 'og_type', 'og_image', 'og_title', 'og_url', 'og_description',
        'og_site_name', 'author', 'canonical', 'geo_region', 'geo_placename',
        'geo_position', 'ICBM'
    ];

    public function post()
    {
        return $this->belongsTo(Post::class);
    }

    public function meta()
    {
        return $this->hasOne(PostMetaElement::class, 'post_id');
    }
}

