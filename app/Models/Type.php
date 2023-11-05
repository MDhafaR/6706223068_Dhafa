<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
// Muhammad Dhafa Ramadhani - 6706223068 - 4604
class Type extends Model
{
    use HasFactory;

    protected $fillable = [
        "name",
        "status"
    ];
}