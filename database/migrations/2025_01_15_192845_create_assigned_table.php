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
        Schema::create('assigned', function (Blueprint $table) {
            $table->integer('idassigned')->primary();
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
            $table->string('create', 45)->nullable();
            $table->string('update', 45)->nullable();
            $table->integer('members_idmembers')->index('fk_assigned_members1_idx');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('assigned');
    }
};
