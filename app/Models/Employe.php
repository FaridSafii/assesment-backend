<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Str;

class Employe extends Model
{
    use HasFactory,SoftDeletes;

    protected $fillable = [
        'nama','total_gaji',
    ];

    public function getNamaAttribute($value)
    {
        $values = explode(" ", Str::upper($value), 2);
        return $firstName=$values[0];
    }
}
