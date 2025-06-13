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
        Schema::create('e_cards', function (Blueprint $table) {
            $table->id();
            $table->string('serial');
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('status_id');
            $table->date('fecha_activacion')->nullable();
            $table->date('fecha_desactivacion')->nullable();
            $table->timestamps();

            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('status_id')->references('id')->on('statuses');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('e_cards');
    }
};
