<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TeacherDetail extends Model
{
    use HasFactory;

    protected $fillable = [
        'teacher_id',
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
