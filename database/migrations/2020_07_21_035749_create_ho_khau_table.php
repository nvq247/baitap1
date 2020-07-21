<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHoKhauTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('HoKhau', function (Blueprint $table) {
            $table->Increments('ID');
            $table->string('HK_CD');
            $table->string('Chu_Ho_ID')->nullable();
            $table->string('Dia_Chi');
            $table->string('Ngay_Cap');
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
        Schema::dropIfExists('HoKhau');
    }
}
