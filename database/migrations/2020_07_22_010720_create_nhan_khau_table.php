<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNhanKhauTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('nhan_khau', function (Blueprint $table) {
            $table->Increments('id');
            $table->integer('HK_ID')->unsigned()->nullable();
            $table->string('user')->nullable();
            $table->string('password')->nullable();
            $table->string("Ho_Ten", '50');
            $table->string("Hinh_Anh", '500')->nullable();
            $table->date('Ngay_Sinh');
            $table->date('Ngay_Mat')->nullable();
            $table->string('Gioi_Tinh', '3');
            $table->string('Quan_He', '30');
            $table->string('Email', '50')->nullable();
            $table->string('SDT', '10');
            $table->date('Ngay_Nhap_Khau');
            $table->foreign('HK_ID')->references('ID')->on('ho_khau')->onDelete('cascade');
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
        Schema::dropIfExists('nhan_khau');
    }
}
