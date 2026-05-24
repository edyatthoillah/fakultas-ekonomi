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
                Schema::create('landing_pages', function (Blueprint $table) {
            $table->id();

            // Branding
            $table->string('logo')->nullable();
            $table->string('app_name')->nullable();

            // Hero Section
            $table->text('hero_title')->nullable();
            $table->string('hero_image')->nullable();

            // Kontak
            $table->string('instagram')->nullable();
            $table->string('email')->nullable();
            $table->string('whatsapp')->nullable();

            // Tentang Kami
            $table->text('about_us')->nullable();
            $table->string('about_us_image')->nullable();

            $table->text('vision')->nullable();
            $table->text('mission')->nullable();

            $table->text('organization_structure')->nullable();

            // Brosur
            $table->string('leaflet_link')->nullable();

            // Footer
            $table->text('footer_description')->nullable();
            $table->text('address')->nullable();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('landing_pages');
    }
};
