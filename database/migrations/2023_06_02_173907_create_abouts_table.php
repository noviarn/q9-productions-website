<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAboutsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('abouts', function (Blueprint $table) {
            $table->Increments('id');
            $table->string('sec1_title', 100);
            $table->string('sec1_subtitle', 100);
            $table->longtext('sec1_isi_konten', 100);
            $table->string('sec1_img', 225)->nullable();
            $table->string('sec2_title', 100);
            $table->string('sec2_img1', 225)->nullable();
            $table->string('sec2_img2', 225)->nullable();
            $table->string('sec3_title', 100);
            $table->string('sec3_subtitle', 100);
            $table->string('sec3_jenis', 100)->nullable();
            $table->unsignedBigInteger('user_id');
            $table->timestamps();

            $table->foreign('user_id')
                ->references('id')
                ->on('users')
                ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('abouts');
    }
}
