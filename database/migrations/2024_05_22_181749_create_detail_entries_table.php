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
        Schema::create('detail_entries', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('entry_id');
            $table->unsignedInteger('article_id');
            $table->integer('quantity');
            $table->decimal('price', 11, 2);
            $table->timestamps();
    
            $table->foreign('entry_id')->references('id')->on('entries');
            $table->foreign('article_id')->references('id')->on('articles');
        });
    }
    

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('detail_entries');
    }
};
