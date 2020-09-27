<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class TrtargetrincianMigration extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('trtargetrincian', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('tmtarget_id');
            $table->char('bulan');
            $table->double('jumlah');
            $table->double('jumlah_perubahan');
            $table->char('ket');
            $table->integer('user_id'); 
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
