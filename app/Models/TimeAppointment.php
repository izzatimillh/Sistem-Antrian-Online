<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TimeAppointment extends Model
{
    use HasFactory;


    protected $guarded = ['id'];

    public function division()
    {
        //satu waktu hanya bisa dimiliki oleh satu division
        return $this->belongsTo(Division::class);
    }

    public function appointment()
    {
        return $this->hasOne(Appointment::class, "id_waktu");
    }
}
