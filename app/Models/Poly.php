<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Poly extends Model
{
    use HasFactory;
    public $table = 'poly';

    public function users()
    {
        return $this->belongsToMany(User::class, 'poly_user', 'poly_id', 'user_id');
    }

    public function doctors()
    {
        return $this->belongsToMany(Doctor::class, 'doctor_poly', 'poly_id', 'doctor_id');
    }

}
