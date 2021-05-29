<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $fillable = [
        'title',
        'authors_id'
    ];

    public function authors()
    {
        return $this->belongsToMany(Author::class, 'authors_books', 'book_id', 'author_id');
    }
}
