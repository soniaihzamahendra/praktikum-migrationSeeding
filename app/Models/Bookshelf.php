<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bookshelf extends Model
{
    use HasFactory;

    protected $table = 'bookshelfs';

    protected $fillable = [
        'code',
        'name',
    ];

    // relasi satu Rak (Bookshelf) bisa menampung banyak Buku (Books)
    public function books()
    {
        return $this->hasMany(Book::class, 'bookshelf_id');
    }
}