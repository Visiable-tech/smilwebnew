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
        Schema::create('posts', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id')->default(1);
            $table->string('post_type');
            $table->text('slug');
            $table->text('title');
            $table->longText('content')->nullable()->charset('utf8mb3')->collation('utf8mb3_bin');
            $table->longText('expert')->nullable();
            $table->text('image')->nullable();
            $table->text('mobile_banner')->nullable();
            $table->text('small_image')->nullable();
            $table->tinyInteger('is_front_page')->default(-1)->comment('-1 for posts, 1 for front page, 0 for other pages');
            $table->tinyInteger('template')->default(2)->comment('1 for home | 2 for default | 4 for contact');
            $table->tinyInteger('status')->default(1)->comment('0 for draft | 1 for Publish');
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('posts');
    }
};
