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
        Schema::create('carts', function (Blueprint $table) {
            $table->id();
            $table->string('status');
            $table->foreignId('user_id')->constrained();

            $table->timestamps();
        });
        Schema::create('carts_products', function (Blueprint $table) {
            $table->id();
            $table->string('number');
            $table->foreignId('cart_id')->constrained();

            $table->foreignId('product_id')->constrained();

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
        Schema::dropIfExists('carts');
    }
};
