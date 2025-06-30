<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::table('reservations', function (Blueprint $table) {
            $table->string('payment_type')->default('full')->after('special_request');
            $table->string('payment_status')->default('pending')->after('payment_type');
        });
    }

    public function down(): void
    {
        Schema::table('reservations', function (Blueprint $table) {
            $table->dropColumn('payment_type');
            $table->dropColumn('payment_status');
        });
    }
};
