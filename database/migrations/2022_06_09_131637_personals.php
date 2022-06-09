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
            $table->foreing('persons_id')->references('id')->on('persons');
            $table->foreing('personals_type_id')->references('id')->on('personals_type');
            $table->timestamp('salary_date');
            $table->timestamp('contract_at');
            $table->timestamp('renovation_at');
            $table->timestamp('final_contract_at');
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
