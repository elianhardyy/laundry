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
        Schema::create('pemesanans', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('jenis_id');
            $table->unsignedBigInteger('user_id');
            $table->integer('satuan')->max(3);
            $table->integer('harga_pemesanan')->max(20);
            $table->enum('hari', ['Senin', 'Selasa', 'Rabu', 'Kamis', 'Jumat', 'Sabtu'])->nullable();
            $table->text('waktu')->nullable();
            $table->enum('status', ['Pending', 'Dijemput', 'Sudah', 'Diambil', 'Selesai'])->default('Pending');
            $table->timestamps();

            $table->foreign('jenis_id')->references('id')->on('daftar_hargas')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pemesanans');
    }
};
