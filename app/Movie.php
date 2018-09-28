<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
    protected $fillable = ['title', 'release_year'];

    public function users()
    {
        return $this->belongsToMany(User::class, 'movie_user');
    }

}
