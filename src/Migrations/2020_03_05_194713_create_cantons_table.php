<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCantonsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cantons', function (Blueprint $table) {
            $table->string('code');
            $table->string('name');
            $table->string('province_code');
            $table->timestamps();
            $table->foreign('province_code')->references('code')->on('provinces');

            //$table->dropPrimary('cantons_id_primary');
            $table->primary(['code', 'province_code']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cantons');
    }
}
