<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHouseadsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('houseads', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->text('title');
            $table->text('cost');
            $table->text('area');
            $table->text('pic');
            $table->text('bed');
            $table->text('bath');
            $table->text('size');
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
        Schema::dropIfExists('houseads');
    }
}
