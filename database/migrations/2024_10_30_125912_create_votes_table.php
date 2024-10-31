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
        Schema::create('vote', function (Blueprint $table) {
            $table->id('id_vote');
            $table->unsignedBigInteger('id_paslon')->index();
            $table->unsignedBigInteger('id_user')->index();
            $table->timestamps();

            $table->foreign('id_paslon')->references('id_paslon')->on('paslon');
            $table->foreign('id_user')->references('id_user')->on('user');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('vote');
    }
};