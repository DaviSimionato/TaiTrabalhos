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
        Schema::create('job_listings', function (Blueprint $table) {
            $table->id()->primary();
            $table->string('title');
            $table->text('description');
            $table->text('modality')->default("Presencial");
            $table->enum('type', ['clt', 'pj', 'temporary'])->nullable();
            $table->string('salary')->nullable();
            $table->text('benefits')->nullable();
            $table->text('tags')->nullable();
            $table->integer('candidates_count');
            $table->foreignId('city_id')->constrained()->onDelete('restrict');
            // $table->foreignId('category_id')->constrained()->onDelete('restrict');
            // $table->foreignId('sub_category_id')->constrained()->onDelete('restrict');
            $table->foreignId('company_id')->constrained()->onDelete('restrict');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('job_listings');
    }
};
