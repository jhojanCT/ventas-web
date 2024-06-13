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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name', 100);
            $table->string('document_type', 20);
            $table->string('document_number', 20);
            $table->string('address', 70)->nullable();
            $table->string('phone', 20)->nullable();
            $table->string('email', 50);
            $table->binary('password');
            $table->string('status', 10)->default('active');
            $table->unsignedBigInteger('role_id');
            $table->foreign("role_id")->references("id")->on("roles")->onDelete('cascade');
            $table->timestamps();
    
            
        });
    }
    

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
