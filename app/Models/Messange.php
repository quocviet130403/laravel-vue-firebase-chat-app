<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Messange extends Model
{
    use HasFactory;

    protected $table = 'messanges';

    protected $fillable = [
        'content', 'user_id'
    ];
}
