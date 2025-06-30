<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void {
        Schema::table('tables', function (Blueprint $table) {
            $table->date('default_date')->nullable()->after('image');
            $table->time('default_time')->nullable()->after('default_date');
            $table->integer('default_duration')->nullable()->after('default_time');
        });
    }

    public function down(): void {
        Schema::table('tables', function (Blueprint $table) {
            $table->dropColumn(['default_date', 'default_time', 'default_duration']);
        });
    }
};
