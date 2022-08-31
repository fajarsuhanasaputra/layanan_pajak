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
            $table->foreign('user_id')->references('id')->on('users');
            $table->string('perusahaan')->nullable();
            $table->enum('status', ['checking', 'rejected', 'approved'])->default('checking');
            $table->string('penanggung_jawab')->nullable();
            $table->enum('jenis_pajak', ['pbb','hotel','bphtb','parkir','hiburan','penerangan','restoran'])->nullable();
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
