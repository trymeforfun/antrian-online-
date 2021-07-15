<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DataPatient extends Model
{
    use HasFactory;

    public $table = 'patient_data';

    protected $fillable = ['nik', 'nama', 'alamat', 'kategori', 'user_id'];
}
