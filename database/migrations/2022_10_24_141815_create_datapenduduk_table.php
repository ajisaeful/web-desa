<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('datapenduduk', function (Blueprint $table) {
            $table->id();
            $table->string('Nama');
            $table->date('Tgl_lahir');
            $table->string('Alamat');
            $table->string('Pekerjaan');
            $table->string('Jenis kelamin');
            $table->string('Status');
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
        Schema::dropIfExists('datapenduduk');
    }
};
