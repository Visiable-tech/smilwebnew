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
        Schema::create('post_meta_elements', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('post_id');
            $table->mediumText('seo_title')->nullable();
            $table->mediumText('description')->nullable();
            $table->mediumText('keywords')->nullable();
            $table->mediumText('robots')->nullable();
            $table->mediumText('revisit_after')->nullable();
            $table->mediumText('og_locale')->nullable();
            $table->mediumText('og_type')->nullable();
            $table->mediumText('og_image')->nullable();
            $table->mediumText('og_title')->nullable();
            $table->mediumText('og_url')->nullable();
            $table->mediumText('og_description')->nullable();
            $table->mediumText('og_site_name')->nullable();
            $table->mediumText('author')->nullable();
            $table->mediumText('canonical')->nullable();
            $table->mediumText('geo_region')->nullable();
            $table->mediumText('geo_placename')->nullable();
            $table->mediumText('geo_position')->nullable();
            $table->mediumText('ICBM')->nullable();

            // Foreign key constraint
            $table->foreign('post_id')->references('id')->on('posts')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('post_meta_elements');
    }
};
