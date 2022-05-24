<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTransaksiPemesananHotelTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transaksi_pemesanan_hotel', function (Blueprint $table) {
            $table->id();
            $table->string('nama_pemesan');
            $table->bigInteger('lama_inap');
            $table->string('tanggal_pesanan');
            $table->unsignedBigInteger('id_hotel');
            $table->unsignedBigInteger('id_user');
            $table->timestamps();

            $table->foreign('id_hotel')->references('id')->on('hotel');
            $table->foreign('id_user')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('transaksi_pemesanan_hotel');
    }
}
