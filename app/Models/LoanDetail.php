<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LoanDetail extends Model
{
    use HasFactory;

    protected $primaryKey = 'id';
    public $incrementing = false;

    protected $fillable = [
        'id',
        'loan_id',
        'book_id',
        'is_return',
    ];

    // relasi detail ini merujuk ke satu Buku 
    public function book()
    {
        return $this->belongsTo(Book::class, 'id', 'id');
    }

    // relasi detail ini bagian dari satu transaksi Pinjaman
    public function loan()
    {
        return $this->belongsTo(Loan::class, 'loan_id', 'id');
    }

    // relasi satu detail pinjaman bisa memiliki satu data Pengembalian
    public function return()
    {
        return $this->hasOne(ReturnModel::class, 'loan_detail_id', 'id');
    }
}