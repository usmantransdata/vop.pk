<?php

namespace App;

use Spatie\Sluggable\HasSlug;
use Spatie\Sluggable\SlugOptions;
use Illuminate\Database\Eloquent\Model;
use App\Post;

class Post extends Model
{

	  use HasSlug;

      public $timestamps = false;

    

    protected $fillable = [
        'title', 'body', 'slug', 'author_id'
    ];


     public function getSlugOptions() : SlugOptions
    {
        return SlugOptions::create()
            ->generateSlugsFrom('title')
            ->saveSlugsTo('slug');
    }

    public function user_id(){
        
        return $this->hasOne(Post::class, 'author_id');
    }

}
