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
            $table->string("name");
            $table->string("image");
            $table->string("manufacturer_id");
            $table->string("patteren_id");
            $table->string("fuel_efficiency");
            $table->string("wet_grip");
            $table->string("road_noise");
            $table->string("width");
            $table->string("profile");
            $table->string("rim_size");
            $table->string("speed");
            $table->string("tyre_type");
            $table->string("season_type");
            $table->string("budget_tyre");
            $table->string("price");
            $table->timestamps();
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
