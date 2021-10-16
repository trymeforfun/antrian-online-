<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DoctorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('doctors')->insert([
            'name' => 'DR. ERYKA ELDAYANA MAAZ',
        ]);
        DB::table('doctors')->insert([
            'name' => 'DR. AGUNG NUGRAHA PRATAMA',
        ]);
        DB::table('doctors')->insert([
            'name' => 'DR. WAHYUNI INDRAWATI',
        ]);
        DB::table('doctors')->insert([
            'name' => 'DR. SWEETY PRIBADI',
        ]);
        DB::table('doctors')->insert([
            'name' => 'DR. ERA MEDINA',
        ]);
    }
}
