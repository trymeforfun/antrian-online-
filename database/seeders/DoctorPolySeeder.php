<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DoctorPolySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('doctor_poly')->insert(
            [
                'doctor_id' => 1,
                'poly_id' => 1
            ]
        );
        DB::table('doctor_poly')->insert(
            [
                'doctor_id' => 2,
                'poly_id' => 2
            ]
        );
        DB::table('doctor_poly')->insert(
            [
                'doctor_id' => 3,
                'poly_id' => 3
            ]
        );
        DB::table('doctor_poly')->insert(
            [
                'doctor_id' => 4,
                'poly_id' => 4
            ]
        );
        DB::table('doctor_poly')->insert(
            [
                'doctor_id' => 5,
                'poly_id' => 5
            ]
        );
    }
}
