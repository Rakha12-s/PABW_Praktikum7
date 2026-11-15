<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
 public function up(): void
 {
     Schema::create('kontaks', function (Blueprint $table) {
        $table->id(); // Primary key
        $table->string('nama'); // VARCHAR(255)
        $table->text('alamat'); // TEXT
        $table->string('no_hp', 15); // Disimpan
        $table->string('foto')->nullable(); // Path foto,
        $table->timestamps(); // created_at dan
    });
 }
 
 public function down(): void
    {
        Schema::dropIfExists('kontaks');
    }
};