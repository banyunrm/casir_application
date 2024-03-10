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
        if (!Schema::hasTable('saledetail')) {
            Schema::create('saledetail', function (Blueprint $table) {
                $table->id('DetailID');
                $table->unsignedBigInteger('SaleID');
                $table->unsignedBigInteger('ProductID');
                $table->integer('NumberOfProduct');
                $table->decimal('Subtotal', 10, 2);
                $table->foreign('SaleID')->references('SaleID')->on('sales');
                $table->foreign('ProductID')->references('ProductID')->on('products');
                $table->timestamps();
            });
        }
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('saledetail');
    }
};
