<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCalonSiswasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('calon_siswas', function (Blueprint $table) {
            $table->id();
            $table->string('nama')->nullable();
            $table->string('jenis_kelamin')->nullable();
            $table->string('nik')->nullable();
            $table->string('ttl')->nullable();
            $table->string('agama')->nullable();
            $table->string('tinggal_bersama')->nullable();
            $table->bigInteger('usia')->nullable();
            $table->text('fp_akta_lahir')->nullable();
            $table->text('pas_foto')->nullable();
            $table->text('fp_ktp_ortu')->nullable();
            $table->text('fp_kk')->nullable();
            $table->bigInteger('id_pendaftaran');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('calon_siswas');
    }
}
