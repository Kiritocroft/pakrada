<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateJadwalPembayaransTable extends Migration
{
    public function up()
    {
        Schema::create('jadwal_pembayarans', function (Blueprint $table) {
            $table->id();
            $table->integer('pekan_ke');
            $table->date('tanggal_mulai');
            $table->date('tanggal_akhir');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('jadwal_pembayarans');
    }
}