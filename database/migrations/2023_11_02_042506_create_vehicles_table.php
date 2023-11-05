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
        Schema::create('vehicles', function (Blueprint $table) {
            $table->id();
            $table->string("name", 50);
            $table->unsignedBigInteger("typeId");
            $table->string("license", 10);
            $table->integer("dailyPrice");
            $table->tinyInteger("status");
            $table->timestamps();

            $table->foreign("typeId")
                ->references("id")
                ->on("types")
                ->onUpdate("cascade")
                ->onDelete("cascade");
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('vehicles');
    }
};
