<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Division extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function time()
    {
        //satu division bisa memiliki banyak waktu
        return $this->hasMany(TimeAppointment::class);
    }

    //satu division bisa punya banyak appointment
    public function appointment()
    {
        return $this->hasMany(Appointment::class);
    }

    public function user()
    {
        //satu user cuman punyo satu divisi
        return $this->hasMany(User::class, 'division_id');
    }
}
