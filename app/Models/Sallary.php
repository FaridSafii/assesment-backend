<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Sallary extends Model
{
    use HasFactory,SoftDeletes;
    protected $fillable = [
        'waktu',
        'id_pegawai',
        'total_diterima',
    ];
}
