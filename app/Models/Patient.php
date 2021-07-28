<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Patient extends Model
{
    use HasFactory;

    protected $fillable=[
        'first_name',
        'last_name',
        'phone',
        'address',
        'document',
        'photo',
        'citizenship',
        'description',
        'required_amount',
    ];
}
