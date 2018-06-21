<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInfographicsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('infographics', function (Blueprint $table) {
           $table->increments('id');
            $table->string('title_en');
            $table->string('title_dr');
            $table->string('title_pa');
            $table->string('date_en');
            $table->string('date_dr');
            $table->string('short_desc_en');
            $table->string('short_desc_dr');
            $table->string('short_desc_pa');
            $table->text('description_en');
            $table->text('description_dr');
            $table->text('description_pa');
            $table->string('image');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('infographics');
    }
}
