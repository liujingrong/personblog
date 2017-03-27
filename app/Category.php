<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    //
    protected $table = 'categories';
    public function contents()
    {
        return $this->hasmany('App\Content','category_id');
    }
}
