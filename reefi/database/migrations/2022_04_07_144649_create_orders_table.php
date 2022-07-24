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
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
             $table->timestamp('created_at')->default(\DB::raw('CURRENT_TIMESTAMP'));
             $table->timestamp('updated_at')->default(\DB::raw('CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP'));
             $table->string('username')->nullable();
             $table->string('email')->nullable();
             $table->string('phone')->nullable();
             $table->string('address')->nullable();
             $table->string('productname')->nullable();
             $table->string("image")->nullable();
             $table->text("description")->nullable();
             $table->string('quantity')->nullable();
             $table->integer('price')->nullable();
             $table->integer('totalprice')->nullable();
             $table->string('status')->nullable();
           // $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('orders');
    }
};
