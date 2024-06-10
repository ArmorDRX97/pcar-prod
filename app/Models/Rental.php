<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rental extends Model
{
    use HasFactory;
    protected $fillable = [
        'car_name',
        'base_price',
        'period',
        'services',
        'pickup_location',
        'pickup_date',
        'pickup_time',
        'return_location',
        'return_date',
        'return_time',
        'customer_type',
        'customer_first_name',
        'customer_last_name',
        'customer_email',
        'customer_phone',
        'status'
    ];
}
