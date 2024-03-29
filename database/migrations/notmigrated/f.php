<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLookbookImages extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('lookbookImages', function (Blueprint $table) {
            $table->increments('id');
            $table->string('path');
            $table->unsignedInteger('lookbook_id');
            $table->foreign('lookbook_id')->references('id')->on('lookbook')->onDelete('cascade');;
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
        Schema::dropIfExists('lookbookImages');
    }
}
