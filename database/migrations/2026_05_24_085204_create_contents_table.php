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
    Schema::create('contents', function (Blueprint $table) {
        $table->id();

        $table->foreignId('content_category_id')
            ->constrained()
            ->cascadeOnDelete();

        $table->string('title'); // Nama Mitra
        $table->date('valid_from'); // Masa Berlaku Awal
        $table->date('valid_until'); // Masa Berlaku Akhir
        $table->string('document_url')->nullable(); // Link Dokumen

        $table->timestamps();
    });
}

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('contents');
    }
};
