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
        Schema::create('students', function (Blueprint $table) {
            $table->string('matric_no', 7)->primary();
            $table->string('name');
            $table->string('password');
            $table->timestamps();
        });

        Schema::create('bookings', function (Blueprint $table) {
            $table->id();

            $table->string('sport');
            $table->date('booking_date');
            $table->string('time_slot');

            // MUST match students.matric_no exactly
            $table->string('matric_no', 7);

            $table->timestamps();

            // Foreign key
            $table->foreign('matric_no')
                ->references('matric_no')
                ->on('students')
                ->cascadeOnUpdate()
                ->cascadeOnDelete();
        });

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bookings');
        Schema::dropIfExists('students');
    }
};
