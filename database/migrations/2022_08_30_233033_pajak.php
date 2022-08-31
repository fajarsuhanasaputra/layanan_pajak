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
        Schema::create('pajaks', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->index('user_id');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->string('perusahaan')->nullable();
            $table->enum('verifikasi', ['ya', 'tidak'])->default('tidak');
            $table->string('penanggung_jawab')->nullable();
            $table->enum('jenis_pajak', ['pbb','pajak_hotel','bphtb','pajak_parkir','pajak_hiburan','pajak_penerangan','pajak_restoran'])->nullable();
            $table->integer('pembayaran')->nullable();
            $table->double('total_pembayaran')->nullable();
            $table->timestamps();
            
        });
    }

    public function down()
    {
        //
    }
};
