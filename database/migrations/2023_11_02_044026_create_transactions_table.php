<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Muhammad Dhafa Ramadhani_6706223068_4604
     */
    public function up(): void
    {
        Schema::create('transactions', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger("userId");
            $table->unsignedBigInteger("vehicleId");
            $table->dateTime("startDate");
            $table->dateTime("endDate");
            $table->integer("price");
            $table->tinyInteger("status");
            $table->timestamps();

            $table->foreign("userId")
                ->references("id")
                ->on("users")
                ->onUpdate("cascade")
                ->onDelete("cascade");

            $table->foreign("vehicleId")->references("id")
                ->on("vehicles")
                ->onUpdate("cascade")
                ->onDelete("cascade");
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('transactions');
    }
};
