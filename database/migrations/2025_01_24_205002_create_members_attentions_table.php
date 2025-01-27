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
            $table->bigIncrements('id');
            $table->string('description', 5000);
            $table->date('date');
            $table->timestamps();
            $table->unsignedBigInteger('members_id')->index('fk_members_attentions_members1_idx');
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
