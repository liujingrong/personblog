<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Content extends Model
{
    //
    protected $table = 'contents';
    public function categories()
    {
        return $this->belongsto('App\Category','category_id');
    }
    public function authors()
    {
        return $this->belongsto('App\Author','author_id');
    }
}
