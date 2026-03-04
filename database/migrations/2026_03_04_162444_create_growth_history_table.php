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
        Schema::create('growth_history', function (Blueprint $table) {
            $table->id();
            $table->foreignId('plant_id')
                ->constrained('plants')
                ->cascadeOnDelete();

            $table->float('height');
            $table->string('condition', 255)->nullable();
            $table->text('image_path')->nullable();
            $table->date('record_date');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('growth_history');
    }
};
