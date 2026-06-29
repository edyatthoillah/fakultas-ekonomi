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
    Schema::create('lecturers', function (Blueprint $table) {
        $table->id();

        // Data utama
        $table->string('document_name');   // nama dokumen
        $table->string('document_link');   // link dokumen

        // Status aktif / tidak aktif
        $table->enum('status', ['active', 'inactive'])->default('active');

        $table->timestamps();
    });
}

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('lecturers');
    }
};
