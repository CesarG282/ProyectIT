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
        Schema::create('assigneds', function (Blueprint $table) {
            $table->integer('id')->primary();
            $table->string('status', 45);
            $table->string('type', 45);
            $table->string('brand', 45);
            $table->string('serie', 45);
            $table->string('model', 45);
            $table->string('stiker', 45);
            $table->string('monitor', 45);
            $table->string('keyboard', 45);
            $table->string('mouse', 45);
            $table->string('adaptador', 45);
            $table->string('description', 45);
            $table->timestamp('create')->nullable();
            $table->timestamp('update')->nullable();
            $table->integer('members_id')->index('fk_assigneds_members1_idx');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('assigneds');
    }
};
