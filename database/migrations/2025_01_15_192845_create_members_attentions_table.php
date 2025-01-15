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
        Schema::create('members_attentions', function (Blueprint $table) {
            $table->integer('members_attentions')->primary();
            $table->string('description', 500);
            $table->dateTime('date');
            $table->string('create', 45)->nullable();
            $table->string('update', 45)->nullable();
            $table->integer('members_idmembers')->index('fk_members_attention_members1_idx');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('members_attentions');
    }
};
