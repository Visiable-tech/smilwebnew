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
        Schema::table('posts', function (Blueprint $table) {
            // Drop columns
            $table->dropColumn(['mobile_banner', 'small_image']);

            // Add new column
            $table->string('image_alt')->nullable()->after('image'); // adjust 'image' to the actual column name you want to follow
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('posts', function (Blueprint $table) {
            // Restore dropped columns
            $table->string('mobile_banner')->nullable();
            $table->string('small_image')->nullable();

            // Drop the added column
            $table->dropColumn('image_alt');
        });
    }
};
