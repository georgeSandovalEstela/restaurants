<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Personals extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('personals', function (Blueprint $table) {
            $table->id();
            $table->unsignedBiginteger('persons_id');
            $table->unsignedBiginteger('personals_type_id');
            $table->foreign('persons_id')->references('id')->on('persons');
            $table->foreign('personals_type_id')->references('id')->on('personalstypes');
            $table->integer('salary_day');
            $table->timestamp('contract_date')->nullable();
            $table->timestamp('renovation_at')->nullable();
            $table->timestamp('final_contract_at')->nullable();
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
        Schema::dropIfExists('personals');
    }
}
