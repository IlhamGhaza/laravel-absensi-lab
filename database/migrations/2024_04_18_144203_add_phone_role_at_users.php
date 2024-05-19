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
        Schema::table('users', function (Blueprint $table) {
            //
            $table->enum('gender',['male', 'female'])->default('male')->nullable();
            $table->string('phone')->nullable();
            $table->enum('role', ['admin', 'staff','user'])->default('user');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('users', function (Blueprint $table) {
            //
            $table->dropColumn('gender');
            $table->dropColumn('phone');
            $table->dropColumn('role');
        });
    }
};
