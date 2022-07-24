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
        Schema::create('addproducts', function (Blueprint $table) {
            $table->id();
            $table->string('username')->nullable();
            $table->string('email');
            $table->string('productname')->nullable();
            $table->string("image", 255)->nullable();
            $table->text("description")->nullable();
            $table->string('quantity')->nullable();
            $table->integer('price')->nullable();
            $table->integer('totalprice')->nullable();
            $table->integer('id_product')->nullable();
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
        Schema::dropIfExists('addproducts');
    }
};
