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
        Schema::create('articles', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('category_id');
            $table->string('code', 50);
            $table->string('name', 100);
            $table->decimal('sale_price', 11, 2);
            $table->integer('stock');
            $table->string('description', 255)->nullable();
            $table->string('image', 20)->nullable();
            $table->string('status', 10)->default('active');
            $table->timestamps();
    
            $table->foreign('category_id')->references('id')->on('categories');
        });
    }
    

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('articles');
    }
};
