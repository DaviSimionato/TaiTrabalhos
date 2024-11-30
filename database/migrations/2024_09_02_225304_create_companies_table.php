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
        Schema::create('companies', function (Blueprint $table) {
            $table->id()->primary();
            $table->enum('status', ['active', 'inactive'])->default('active');
            $table->string('name');
            $table->string('cnpj');
            $table->string('email');
            $table->string('sector')->nullable();
            $table->string('address')->nullable();
            $table->foreignId('city_id')->nullable();
            $table->foreignId('state_id')->nullable();
            $table->text('social_media_links')->nullable();
            $table->integer('employees_count')->nullable();
            $table->string('profile_picture')->nullable();
            $table->string('logo')->nullable();
            $table->string('password');
            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('companies');
    }
};
