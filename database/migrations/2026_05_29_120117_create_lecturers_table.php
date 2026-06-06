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

        $table->string('name');

        // Nomor Identitas
        $table->string('nidn')->nullable();
        $table->string('nip')->nullable();
        $table->string('nuptk')->nullable();

        // Informasi Dosen
        $table->string('position')->nullable(); // Jabatan
        $table->string('study_program')->nullable(); // Program Studi

        // Kontak
        $table->string('email')->nullable();
        $table->string('phone')->nullable();

        // Foto
        $table->string('photo')->nullable();

        // Pengurutan & Status
        $table->integer('order')->default(0);
        $table->boolean('is_active')->default(true);

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
