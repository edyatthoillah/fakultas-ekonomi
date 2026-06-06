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
        Schema::create('study_programs', function (Blueprint $table) {
            $table->id();

            // Identitas
            $table->string('name');
            $table->string('slug')->unique();
            $table->string('logo')->nullable();

            // Hero
            $table->string('hero_title')->nullable();
            $table->string('hero_image')->nullable();

            // Profil Program Studi
            $table->longText('description')->nullable();

            // Kaprodi
            $table->string('head_of_program')->nullable();
            $table->string('head_of_program_photo')->nullable();
            $table->longText('head_of_program_greeting')->nullable();

            // Visi & Misi
            $table->longText('vision')->nullable();
            $table->longText('mission')->nullable();

            // Struktur Organisasi
            $table->string('organization_structure')->nullable();

            // Akreditasi
            $table->string('accreditation')->nullable();
            $table->string('accreditation_number')->nullable();

            // Kontak
            $table->string('email')->nullable();
            $table->string('phone')->nullable();

            // Brosur
            $table->string('brochure_file')->nullable();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('study_programs');
    }
};
