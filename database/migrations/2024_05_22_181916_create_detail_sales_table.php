<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('detail_sales', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('sale_id');
            $table->unsignedInteger('article_id');
            $table->integer('quantity');
            $table->decimal('price', 11, 2);
            $table->decimal('discount', 11, 2);
            $table->timestamps();
    
            $table->foreign('sale_id')->references('id')->on('sales');
            $table->foreign('article_id')->references('id')->on('articles');
        });
    }
    

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('detail_sales');
    }
};
