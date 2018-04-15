<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOutboundsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('outbounds', function (Blueprint $table) {
            $table->increments('id');
            $table->string('username');
            $table->string('cardNumber');
            $table->string('contuctNumber');
            $table->string('categoryinfo');
            $table->string('quaryinfo');
            $table->string('branchinfo');
            $table->string('accountsinfo');
            $table->text('categorydes')->nullable();
            $table->string('serviceType');
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
        Schema::dropIfExists('outbounds');
    }
}
