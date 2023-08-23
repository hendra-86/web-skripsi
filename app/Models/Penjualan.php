<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Penjualan extends Model
{
    use HasFactory;


    protected $fillable = [
        'id',
        'date',
        'pembeli',
        'name',
        'quantity',
        'nominal',
    ];
}
