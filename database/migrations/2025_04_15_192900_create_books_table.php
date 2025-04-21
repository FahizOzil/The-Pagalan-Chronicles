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
    Schema::create('books', function (Blueprint $table) {
        $table->id();
        $table->string('title');
        $table->string('slug')->unique();
        $table->string('subtitle')->nullable();
        $table->text('description');
        $table->text('excerpt')->nullable();
        $table->string('cover_image')->nullable();
        $table->decimal('price_softback', 8, 2)->nullable();
        $table->decimal('price_hardback', 8, 2)->nullable();
        $table->date('release_date');
        $table->integer('page_count')->nullable();
        $table->integer('book_number');
        $table->boolean('is_published')->default(false);
        $table->timestamps();
    });
}

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('books');
    }
};
