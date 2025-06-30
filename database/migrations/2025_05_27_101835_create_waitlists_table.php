<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('waitlists', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email');
            $table->string('phone')->nullable();
            $table->unsignedBigInteger('category_id')->nullable(); // Desired table type/category
            $table->integer('seating_capacity')->nullable();      // Desired capacity
            $table->boolean('auto_book')->default(false);
            $table->enum('status', ['waiting', 'notified', 'booked'])->default('waiting');
            $table->timestamps();

            $table->foreign('category_id')->references('id')->on('table_categories')->onDelete('set null');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('waitlists');
    }
};
