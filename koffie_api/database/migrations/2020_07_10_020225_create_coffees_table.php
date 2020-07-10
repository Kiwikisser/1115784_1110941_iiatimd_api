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
            $table->String('coffee_ingredients');
            $table->longText('coffee_description');
            $table->String('coffee_bean')->default('Arabica');
            $table->String('coffee_servings');
            $table->String('coffee_preptime');
            $table->String('coffee_image');
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
