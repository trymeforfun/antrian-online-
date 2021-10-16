<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DataPatient extends Model
{
    use HasFactory;

    public $table = 'patient_data';

    protected $fillable = [
        'nik', 'nama', 'alamat', 'kategori', 'user_id', 'no_hp', 'payment_status', 'regis_status', 'no_antrian', 'poly_name', 'doctor_desc'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
