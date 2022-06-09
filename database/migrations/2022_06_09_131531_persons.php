<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Persons extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('persons', function (Blueprint $table) {
            $table->id();
            $table->foreing('document_type_id')->references('id')->on('documents_type');
            $table->string('document');
            $table->string('name');
            $table->string('lastname');
            $table->string('fullname');
            $table->timestamp('birthday');
            $table->string('email');
            $table->string('sex');
            $table->string('address');
            $table->string('country');
            $table->string('city');
            $table->string('ubigeo');
            $table->timestamps();
            $table->integer('state')->default(1);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('persons');
    }
}
