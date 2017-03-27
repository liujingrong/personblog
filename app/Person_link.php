<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Person_link extends Model
{
    //
    protected $table = 'person_links';

    public function authors()
    {
        return $this->belongsto('App\Author','author_id');
    }
}
