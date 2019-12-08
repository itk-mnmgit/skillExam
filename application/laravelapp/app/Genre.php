<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Genre extends Model
{
    public static function getGenreName(int $genre_id)
    {

        $genreName = Genre::where('id', $genre_id)->get();

        return $genreName;
    }

    public function genre()
    {
        return $this->belongsTo('App\Question');
    }
}
