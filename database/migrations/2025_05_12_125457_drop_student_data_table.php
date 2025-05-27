<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::dropIfExists('student_data');
    }

    public function down()
    {
        // Optional: recreate the table in rollback if needed
        Schema::create('student_data', function ($table) {
            $table->id();
            $table->string('student_name');
            $table->string('page_url')->nullable();
            $table->string('student_email')->unique();
            $table->string('student_number');
            $table->string('student_class');
            $table->timestamps();
        });
    }
};
