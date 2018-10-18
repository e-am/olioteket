<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Post extends Model
{
    protected $guarded = [];

    public function comments()

        {
<<<<<<< HEAD
            return $this->hasMany(Comments::class);
=======
            
            return $this->hasMany('App\Comment');
>>>>>>> 59646c3772780a8271f004e36a2a2a9eed7e7e64
        }
      
}
