<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCoffeesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('coffees', function (Blueprint $table) {
            $table->String('coffee_name');
            $table->longText('coffee_ingredients');
            $table->longText('coffee_description');
            $table->longText('coffee_bean');
            $table->longText('coffee_servings');
            $table->longText('coffee_preptime');
            $table->longText('coffee_image');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('coffees');
    }
}
