<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;

    protected $primaryKey = 'id';
    public $incrementing = false;

    protected $fillable = [
        'id',
        'title',
        'author',
        'year',
        'publisher',
        'city',
        'cover',
        'bookshelf_id',
    ];

    // relasi satu Buku merujuk ke satu Kategori
    public function category()
    {
        return $this->belongsTo(Category::class, 'id', 'id');
    }

    // relasi satu Buku berada di satu Rak
    public function bookshelf()
    {
        return $this->belongsTo(Bookshelf::class, 'bookshelf_id');
    }

    // relasi satu Buku memiliki satu Detail Pinjaman
    public function loanDetail()
    {
        return $this->hasOne(LoanDetail::class, 'id', 'id');
    }
}