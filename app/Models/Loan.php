<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Loan extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_npm',
        'loan_at',
        'return_at',
    ];

    // relasi pinjaman ini dimiliki oleh satu User
    public function user()
    {
        return $this->belongsTo(User::class, 'user_npm', 'npm');
    }

    // relasi satu Pinjaman bisa memiliki banyak Detail Pinjaman
    public function loanDetails()
    {
        return $this->hasMany(LoanDetail::class, 'loan_id', 'id');
    }
}