<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PolySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('poly')->insert([
            'nama' => 'MCU',
        ]);
        DB::table('poly')->insert([
            'nama' => 'ICV',
        ]);
        DB::table('poly')->insert([
            'nama' => 'BEDAH UMUM',
        ]);
        DB::table('poly')->insert([
            'nama' => 'BEDAH PLASTIK',
        ]);
        DB::table('poly')->insert([
            'nama' => 'PENYAKIT DALAM',
        ]);
        DB::table('poly')->insert([
            'nama' => 'SPESIALIS ANAK',
        ]);
        DB::table('poly')->insert([
            'nama' => 'KEBIDANAN & KANDUNGAN',
        ]);
        DB::table('poly')->insert([
            'nama' => 'GIGI',
        ]);
        DB::table('poly')->insert([
            'nama' => 'KULIT & KELAMIN',
        ]);
        DB::table('poly')->insert([
            'nama' => 'SARAF',
        ]);
        DB::table('poly')->insert([
            'nama' => 'MATA',
        ]);
        DB::table('poly')->insert([
            'nama' => 'PARU',
        ]);
        DB::table('poly')->insert([
            'nama' => 'ANASTESI',
        ]);
        DB::table('poly')->insert([
            'nama' => 'REHABILITASI MEDIK',
        ]);
        DB::table('poly')->insert([
            'nama' => 'THT',
        ]);
        DB::table('poly')->insert([
            'nama' => 'JANTUNG',
        ]);
        DB::table('poly')->insert([
            'nama' => 'GERIATRI',
        ]);
        DB::table('poly')->insert([
            'nama' => 'JIWA',
        ]);
        DB::table('poly')->insert([
            'nama' => 'PSIKOLOGI',
        ]);
        DB::table('poly')->insert([
            'nama' => 'HEMODIALISA',
        ]);
        DB::table('poly')->insert([
            'nama' => 'PATOLOGI ANATOMI',
        ]);
        DB::table('poly')->insert([
            'nama' => 'ORHTOPEDI',
        ]);
        DB::table('poly')->insert([
            'nama' => 'RADIOLOGI',
        ]);
    }
}
