<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCommissionedTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('commissioned', function (Blueprint $table) {
            $table->increments('id');
            $table->string('path');
            $table->string('uploaded_token');
            $table->string('mua')->nullable();;
            $table->string('model')->nullable();;
            $table->string('photographer')->nullable();
            $table->string('stylist')->nullable();
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
        Schema::dropIfExists('commissioned');
    }
}
