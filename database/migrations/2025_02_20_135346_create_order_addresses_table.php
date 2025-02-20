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
        Schema::create('order_addresses', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained('users')->onDelete('cascade'); // FK
            $table->string('recipient', 255); // VARCHAR(255)
            $table->string('postal_code', 10); // VARCHAR(10)
            $table->string('address_line1', 255); // VARCHAR(255)
            $table->string('address_line2', 255)->nullable(); // VARCHAR(255)（NULL許可）
            $table->string('phone_number', 20);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('order_addresses');
    }
};
