<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
// Muhammad Dhafa Ramadhani - 6706223068 - 4604
class Transaction extends Model
{
    use HasFactory;

    protected $fillable = [
        "userId",
        "vehicleId",
        "startDate",
        "endDate",
        "price",
        "status"
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'userId', 'id');
    }

    public function vehicle()
    {
        return $this->belongsTo(Vehicle::class, 'vehicleId', 'id');
    }
}
