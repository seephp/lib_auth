<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    public function author()
    {
        $this->belongsToMany('App\Author', 'authors');
    }
}
