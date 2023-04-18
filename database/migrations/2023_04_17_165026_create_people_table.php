<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Eloquent\Model\Person;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {       
        
        Schema::create('people', function (Blueprint $table) {
            $table->id('id');
            // $table->unsignedBigInteger('phone_id');
            $table->timestamps();

            // $table->foreign('phone_id')->references('id')->on('phones');
            // $table->foreign('phone_id')->references('id')->on('phones');
            // $table->foreign('phone_id')->references('id')->on('phones');
            // $table->foreignId('phone_id')->references('id')->on('phones');
            // $table->foreignId('phone_id')->constraints('phones');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('people');
    }
};
