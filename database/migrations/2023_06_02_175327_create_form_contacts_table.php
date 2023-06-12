<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFormContactsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('form_contacts', function (Blueprint $table) {
            $table->Increments('id');
            $table->string('fullname', 100);
            $table->string('phone_number', 100);
            $table->string('email', 100);
            $table->string('message', 225);
            $table->unsignedInteger('contact_id');
            $table->timestamps();

            $table->foreign('contact_id')
                ->references('id')
                ->on('contacts')
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
        Schema::dropIfExists('form_contacts');
    }
}
