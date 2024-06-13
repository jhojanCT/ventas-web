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
        Schema::create('sales', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('client_id');
            $table->unsignedBigInteger('user_id');
            $table->string('voucher_type', 20);
            $table->string('voucher_series', 7)->nullable();
            $table->string('voucher_number', 10);
            $table->dateTime('date_time');
            $table->decimal('tax', 4, 2);
            $table->decimal('total', 11, 2);
            $table->string('status', 20);
            $table->timestamps();
    
            $table->foreign('client_id')->references('id')->on('persons')->onDelete('cascade');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
        });
    }
    

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sales');
    }
};
