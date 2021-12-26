<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddStatusOnTransaksiPembyarans extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('transaksi_pembayarans', function (Blueprint $table) {
            $table->string('status_pembayaran')->default('menunggu-konfirmasi');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('transaksi_pembayarans', function (Blueprint $table) {
            $table->dropColumn('status_pembayaran');
        });
    }
}
