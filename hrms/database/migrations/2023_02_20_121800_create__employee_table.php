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
        Schema::create('_employee', function (Blueprint $table) {
            $table->id('emp_id');
            $table->string('emp_name',30)->nullable();
            $table->string('emp_email',30)->nullable();
            $table->string('password',16)->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('_employee');
    }
};
