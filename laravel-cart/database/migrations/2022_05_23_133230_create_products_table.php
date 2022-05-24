<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('name')->unique()->nullabel(false);
            $table->string('details')->nullabel(false);
            $table->text('description')->nullabel(false);
            $table->text('brabd')->nullabel(false);
            $table->double('price')->nullabel(false);
            $table->double('shopping_cost');
            $table->text('image_path')->nullabel(false);

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
        Schema::dropIfExists('products');
    }
};
