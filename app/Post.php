<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends PrimaryModel
{
    protected $localeStrings = ['title', 'description'];
    protected $fillable = ['title_en', 'category_id', 'title_ar', 'description_en', 'description_ar', 'image'];

    public function user()
    {
        return $this->belongsTo('App\User');
    }

    public function category()
    {
        return $this->belongsTo('App\Category');
    }
}
