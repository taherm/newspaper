<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends PrimaryModel
{
    protected $localeStrings = ['title'];
    protected $fillable = ['title_en', 'title_ar', 'parent_id'];

    public function parent()
    {
        return $this->belongsTo('App\Category', 'parent_id');
    }

    public function children()
    {
        return $this->hasMany('App\Category', 'parent_id');
    }

    public function users()
    {
        return $this->belongsToMany('App\User');
    }

    public function posts()
    {
        return $this->hasMany('App\Post');
    }
}
