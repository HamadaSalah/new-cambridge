<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MYP extends Model
{
    use HasFactory;
    protected $guarded = [];
    protected $casts = [
        'sec5_img' => 'array'
    ];

}
