<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Appointment extends Model
{
    use HasFactory;

    protected $table = 'appointments';

    protected $fillable = [
        'doctor_id',
        'name',
        'phone_number',
        'amount',
        'transaction_id',
        'email'
    ];

    public function doctor()
    {
        return $this->belongsTo(Doctor::class,'doctor_id');
    }
}