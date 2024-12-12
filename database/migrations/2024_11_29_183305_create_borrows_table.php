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
        Schema::create('borrows', function (Blueprint $table) {
            $table->id();
            $table->integer('film_id');
            $table->string('member_oib');
            $table->dateTime('borrow_date');
            $table->dateTime('return_date');
            $table->decimal('late_fee', 10, 2);

            $table->foreign('member_oib')->references('oib')->on('members');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('borrows');
    }
};
