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
        Schema::create('generics_accounts', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('area', 45);
            $table->string('responsible', 45);
            $table->string('account', 45);
            $table->string('password', 45);
            $table->string('sn_computer', 45);
            $table->string('brand_computer', 45);
            $table->unsignedBigInteger('users_id')->index('fk_generics_accounts_users1_idx');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('generics_accounts');
    }
};
