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

        Schema::create('users', function (Blueprint $table) {
            $table->id()->primary();
            $table->enum('status', ['active', 'inactive'])->default('active');
            $table->string('name')->nullable();;
            $table->string('user_name')->nullable()->unique();
            $table->string('email')->unique();
            $table->boolean('email_verified')->default(false);
            $table->timestamp('email_verified_at')->nullable();
            $table->enum('current_situation', ['Trabalhando', 'Buscando emprego'])->default('Buscando emprego');
            $table->string('current_position')->nullable();
            $table->string('company')->nullable();
            $table->foreignId('city')->nullable();
            $table->foreignId('state')->nullable();
            $table->string('country')->default('Brasil');
            $table->text('profile_picture')->default('storage/images/blank-profile-picture.png');
            $table->string('resume')->nullable();
            $table->string('password');
            $table->rememberToken();
            $table->timestamps();
        });

        Schema::create('password_reset_tokens', function (Blueprint $table) {
            $table->string('email')->primary();
            $table->string('token');
            $table->timestamp('created_at')->nullable();
        });

        Schema::create('sessions', function (Blueprint $table) {
            $table->string('id')->primary();
            $table->foreignId('user_id')->nullable()->index();
            $table->string('ip_address', 45)->nullable();
            $table->text('user_agent')->nullable();
            $table->longText('payload');
            $table->integer('last_activity')->index();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
        Schema::dropIfExists('password_reset_tokens');
        Schema::dropIfExists('sessions');
    }
};
