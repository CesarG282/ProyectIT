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
        Schema::create('movements', function (Blueprint $table) {
            $table->integer('id')->primary();
            $table->string('movement_type', 45);
            $table->string('sent', 45);
            $table->string('address', 45);
            $table->date('date');
            $table->string('shipping_medium', 45);
            $table->string('responsible', 45);
            $table->string('description', 500);
            $table->timestamp('create')->nullable();
            $table->timestamp('update')->nullable();
            $table->unsignedBigInteger('users_id')->index('fk_movements_users1_idx');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('movements');
    }
};
