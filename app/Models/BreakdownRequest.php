<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class BreakdownRequest extends Model
{
    protected $fillable = [
        'user_id',
        'mechanic_id',
        'vehicle_type',
        'problem_description',
        'latitude',
        'longitude',
        'status'
    ];
}