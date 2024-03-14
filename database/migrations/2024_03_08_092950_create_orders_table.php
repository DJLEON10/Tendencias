<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->bigInteger('products_id')->unsigned();
            $table->bigInteger('customers_id')->unsigned();



            $table->date('fecha');
            $table->decimal('valor',8,2);
            $table->foreign('products_id')->references('id')->on('products');
            $table->foreign('customers_id')->references('id')->on('customers');




            
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('orders');
    }
};
