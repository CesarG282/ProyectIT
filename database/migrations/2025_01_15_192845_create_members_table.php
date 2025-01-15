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
        Schema::create('members', function (Blueprint $table) {
            $table->integer('idmembers')->primary();
            $table->string('name', 100);
            $table->integer('idshart');
            $table->string('corporate_mail', 45);
            $table->string('contact', 45);
            $table->string('area', 45);
            $table->string('locality', 45);
            $table->string('company', 45);
            $table->string('create', 45)->nullable();
            $table->string('update', 45)->nullable();
            $table->string('user_username', 16);
            $table->unsignedBigInteger('users_id')->index('fk_members_users1_idx');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('members');
    }
};
