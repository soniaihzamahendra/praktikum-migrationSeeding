<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $table = 'categories';

    protected $fillable = [
        'category',
    ];

    // relasi satu Kategori memiliki satu Buku 
    public function book()
    {
        return $this->hasOne(Book::class, 'id', 'id');
    }
}