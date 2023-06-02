<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Polices extends Model
{
    use HasFactory;
    protected $guarded = [];
    protected $casts = [
        'third_p_img' => 'array'];
}
