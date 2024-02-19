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
        Schema::create(table: 'posts', function (Blueprint $table) {
            $table->id();
            $table->string(column: 'title');
            $table->string(column: 'slug');
            $table->string(column: 'thumbnail')->nullable();
            $table->longText(column:'body');
            $table->boolean(column:'active');
            $table->datetimes(precision: 'published_at');
            $table->foreignIdFor(model: \App\Models\User::class, column: 'user_id');
            $table->timestamps();
        );
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('posts');
    }
};
