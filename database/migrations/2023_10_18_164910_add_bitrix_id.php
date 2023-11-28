<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::table('applications', static function (Blueprint $table) {
            $table->bigInteger('bitrix_id')->nullable();
        });
    }

    public function down(): void
    {
        Schema::table('applications', static function (Blueprint $table) {
            $table->dropColumn('bitrix_id');
        });
    }
};
