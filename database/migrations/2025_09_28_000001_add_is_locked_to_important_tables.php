<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('api_keys', function (Blueprint $table) {
            $table->boolean('is_locked')->default(false)->after('key');
        });
        Schema::table('cities', function (Blueprint $table) {
            $table->boolean('is_locked')->default(false)->after('slug');
        });
        Schema::table('office_spaces', function (Blueprint $table) {
            $table->boolean('is_locked')->default(false)->after('slug');
        });
    }

    public function down(): void
    {
        Schema::table('api_keys', function (Blueprint $table) {
            $table->dropColumn('is_locked');
        });
        Schema::table('cities', function (Blueprint $table) {
            $table->dropColumn('is_locked');
        });
        Schema::table('office_spaces', function (Blueprint $table) {
            $table->dropColumn('is_locked');
        });
    }
};
