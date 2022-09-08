<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddRolesToUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->string('roles')->after('email')->default('USER');
            $table->string('nim')->after('roles');
            $table->string('alamat')->after('nim');
            $table->string('jenis_kelamin')->after('alamat');
            $table->string('agama')->after('jenis_kelamin');
            $table->date('tanggal_lahir')->after('agama');
            $table->string('tempat_lahir')->after('tanggal_lahir');
            $table->foreignId('matkul_id')->after('tanggal_lahir')->default('0');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn('roles');
            $table->dropColumn('nim');
            $table->dropColumn('alamat');
            $table->dropColumn('jenis_kelamin');
            $table->dropColumn('agama');
            $table->dropColumn('tanggal_lahir');
            $table->dropColumn('tempat_lahir');
        });
    }
}
