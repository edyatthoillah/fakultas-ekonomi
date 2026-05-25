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
        Schema::create('students', function (Blueprint $table) {
            $table->id();

            $table->foreignId('student_category_id')
                ->constrained('student_categories')
                ->cascadeOnDelete();

            $table->string('name'); // nama mahasiswa / judul kegiatan
            $table->text('description')->nullable();

            $table->string('image')->nullable();
            $table->string('institution')->nullable(); // misal kampus/lomba/perusahaan
            $table->date('date')->nullable();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('students');
    }
};
