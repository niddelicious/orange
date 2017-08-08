<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    //
    public function posts()
    {
        return $this->hasMany(Post::class);
    }

    public function parent()
    {
        return $this->belongsTo('Category','parent_id');
    }

    public function children()
    {
        return $this->hasMany('Category','parent_id');
    }
}
