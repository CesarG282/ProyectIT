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
        Schema::table('assigneds', function (Blueprint $table) {
            $table->foreign(['members_idmembers'], 'fk_assigned_members1')->references(['idmembers'])->on('members')->onUpdate('no action')->onDelete('no action');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('assigneds', function (Blueprint $table) {
            $table->dropForeign('fk_assigned_members1');
        });
    }
};
