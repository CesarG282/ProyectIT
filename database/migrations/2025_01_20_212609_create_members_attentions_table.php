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
            $table->bigInteger('id')->primary();
            $table->string('description', 500);
            $table->dateTime('date');
            $table->timestamp('create')->nullable();
            $table->timestamp('update')->nullable();
            $table->integer('members_id')->index('fk_members_attentions_members1_idx');
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
