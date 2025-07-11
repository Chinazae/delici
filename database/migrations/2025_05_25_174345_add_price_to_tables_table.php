<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void {
        Schema::table('tables', function (Blueprint $table) {
            $table->decimal('price', 10, 2)->default(0)->after('seating_capacity');
        });
    }

    public function down(): void {
        Schema::table('tables', function (Blueprint $table) {
            $table->dropColumn('price');
        });
    }
};
