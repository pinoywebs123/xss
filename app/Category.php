<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable = ['category_name'];

    public function todos()
    {
        return $this->hasMany('App\Todo');
    }
}
