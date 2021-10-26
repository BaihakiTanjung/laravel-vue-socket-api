<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bid extends Model
{
    use HasFactory;

    protected $table = "bid";

    protected $fillable = [
        "user_id", "car_id", "price"
    ];
}
