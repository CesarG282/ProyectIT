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
            $table->foreign(['members_id'], 'fk_assigneds_members1')->references(['id'])->on('members')->onUpdate('no action')->onDelete('no action');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('assigneds', function (Blueprint $table) {
            $table->dropForeign('fk_assigneds_members1');
        });
    }
};
