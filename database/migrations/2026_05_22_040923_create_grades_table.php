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
    Schema::create('grades', function (Blueprint $table) {

        $table->id();

        $table->string('student');

        $table->string('classroom');

        $table->string('subject');

        $table->decimal('grade1', 5,2)->nullable();

        $table->decimal('grade2', 5,2)->nullable();

        $table->decimal('average', 5,2)->nullable();

        $table->timestamps();

    });
}

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('grades');
    }
};
