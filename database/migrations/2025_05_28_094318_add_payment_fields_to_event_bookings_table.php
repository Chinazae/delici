<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::table('event_bookings', function (Blueprint $table) {
            $table->enum('payment_type', ['deposit', 'full'])->default('full')->after('status');
            $table->string('paystack_reference')->nullable()->after('payment_status');
        });
    }

    public function down(): void
    {
        Schema::table('event_bookings', function (Blueprint $table) {
            $table->dropColumn(['payment_type', 'paystack_reference']);
        });
    }
};
