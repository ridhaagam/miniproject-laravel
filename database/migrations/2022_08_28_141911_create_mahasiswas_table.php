<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMahasiswasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mahasiswas', function (Blueprint $table) {
            $table->id();
            $table->integer('nim');
            $table->string('nama_lengkap');
            $table->string('email');
            $table->string('alamat');
            $table->string('jenis_kelamin');
            $table->string('agama');
            $table->date('tanggal_lahir');
            $table->string('tempat_lahir');
            $table->foreignId('matkul_id');
            $table->string('photo')->nullable();
        

            $table->softDeletes();
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
        Schema::dropIfExists('mahasiswas');
    }
}
