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
        Schema::create('pruebas', function (Blueprint $table) {
            $table->bigIncrements('id');
            // $table->unsignedBigInteger('user_id');
            $table->string('title')->unique();
            $table->text('expert')->nulllable();
            $table->text('body');
            $table->integer('min_to_read')->default(1);
            $table->string('image_path');
            $table->boolean('is_published');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pruebas');
    }
};
