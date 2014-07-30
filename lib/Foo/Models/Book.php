<?php namespace Foo\Models;

use Illuminate\Database\Eloquent\Model as Eloquent;

class Book extends Eloquent
{
    public $fillable = [
        'title',
        'description'
    ];


    public function author()
    {
        return $this->belongsTo("\\Foo\\Models\\Author");
    }
}