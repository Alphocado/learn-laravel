<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;


/**
 * Sekarang buat table database
 * hanya perlu melalui migrate
 * tidak perlu export import
 * mysql
 *  */

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     * * * * * * * * * * 
     * Membuat Table
     * @return void
     */
    public function up()
    {
        // nama tabel
        Schema::create('users', function (Blueprint $table) {
            // isi tabel
            $table->bigIncrements('id');
            $table->string('name');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     * * * * * * * * * * * * 
     * atau menghapus table 
     * (rollback) sebelum 
     * keadaan migrasi
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
