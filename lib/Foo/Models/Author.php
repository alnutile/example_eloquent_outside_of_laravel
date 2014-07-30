<?php namespace Foo\Models;

use Illuminate\Database\Eloquent\Model as Eloquent;

class Author extends Eloquent
{
    public $fillable = [
        'name',
    ];

    public function books()
    {
        return $this->hasMany("\\Foo\\Models\\Book");
    }


}