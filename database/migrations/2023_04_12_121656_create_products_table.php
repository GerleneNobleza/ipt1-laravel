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
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('productname', 150); //varchar(150)
            $table->decimal('unitprice', 8, 2);
            //$table->float('quantity', 8, 2);
            $table->integer('quantity');
            $table->string('category', 50);
            $table->timestamps(); //createAt, updateAt
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
