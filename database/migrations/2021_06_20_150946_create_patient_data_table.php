<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePatientDataTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('patient_data', function (Blueprint $table) {
            $table->id();
            $table->string('no_antrian')->nullable();
            $table->string('nama')->nullable();
            $table->text('alamat')->nullable();
            $table->enum('kategori', ['umum', 'jaminan'])->nullable();
            $table->json('daftar_obat')->nullable();
            $table->foreignId('user_id');
            $table->text('barcode')->nullable();
            $table->string('no_hp')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('patient_data');
    }
}
