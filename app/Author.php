<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Author extends Model
{
    //
    protected $table = 'authors';

    public function contents()
    {
        return $this->hasMany('App\Content','author_id');
    }
    public function person_links()
    {
        return $this->hasMany('App\Person_link','author_id');
    }
}
