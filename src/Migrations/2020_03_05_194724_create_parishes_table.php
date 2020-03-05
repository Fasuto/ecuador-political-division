<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateParishesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('parishes', function (Blueprint $table) {
            $table->string('code');
            $table->string('name');
            $table->boolean('capital')->nullable();
            $table->string('canton_code');
            $table->string('province_code');
            $table->timestamps();
            $table->foreign(['canton_code','province_code'])->references(['code','province_code'])->on('cantons');

            //$table->dropPrimary('prishes_code_primary');
            $table->primary(['code', 'canton_code', 'province_code']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('prish');
    }
}
