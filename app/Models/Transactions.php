<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transactions extends Model
{
    use HasFactory;
    protected $fillable=[
        'amount',
        'donor_id',
        'donor_name',
        'patient_id'
    ];
}
