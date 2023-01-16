<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserDetail extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'mobile',
        'gender',
        'dob',
        'street_address',
        'city',
        'state',
        'country',
        'postal_code',
    ];
}
