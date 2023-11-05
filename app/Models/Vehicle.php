<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
// Muhammad Dhafa Ramadhani - 6706223068 - 4604
class Vehicle extends Model
{
    use HasFactory;

    protected $fillable = [
        "name",
        "typeId",
        "license",
        "dailyPrice",
        "status"
    ];

    public function type()
    {
        return $this->belongsTo(Type::class, 'typeId', 'id');
    }

    public function transactions()
    {
        return $this->hasMany(Transaction::class, 'vehicleId', 'id');
    }
}
