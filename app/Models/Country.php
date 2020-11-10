<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
    protected $fillable = [
        'code',
        'name'
    ];

    protected $hidden = [
        'id',
        'created_at',
        'updated_at'
    ];

    use HasFactory;
}
