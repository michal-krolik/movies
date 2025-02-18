<?php

use App\MovieGenre;
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
        Schema::create('movies', function (Blueprint $table) {
            $table->id();
            $table->string('title')->fulltext(); // Zastosowanie indeksu ze względu na wydajność wyszukiwania
            $table->enum('genre', MovieGenre::getGenreList()->toArray());
            $table->integer('likes')->default(0);
            $table->float('rating')->default(1);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('movies');
    }
};
