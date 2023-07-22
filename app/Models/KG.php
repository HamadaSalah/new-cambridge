<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KG extends Model
{
    use HasFactory;
    protected $guarded = [];
    protected $casts = [
        'sec1_img' => 'array'
    ];
}
