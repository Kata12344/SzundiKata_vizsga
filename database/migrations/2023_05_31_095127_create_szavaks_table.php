<?php

use App\Models\Szavak;
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
        Schema::create('szavaks', function (Blueprint $table) {
            $table->id('id');
            $table->string('angol');
            $table->string('magyar');
            $table->foreignId('temaId')->references('id')->on('temas');
            $table->timestamps();
        });
        Szavak::create(['id' => 11, 'angol' => 'elbow', 'magyar' => 'könyök','temaId' => 1]);
        Szavak::create(['id' => 12, 'angol' => 'nose', 'magyar' => 'orr','temaId' => 1]);
        Szavak::create(['id' => 13, 'angol' => 'ear', 'magyar' => 'füll','temaId' => 1]);

        Szavak::create(['id' => 21, 'angol' => 't-shirt', 'magyar' => 'póló','temaId' => 2]);
        Szavak::create(['id' => 22, 'angol' => 'shorts', 'magyar' => 'rövid nadrág','temaId' => 2]);
        Szavak::create(['id' => 23, 'angol' => 'shoes', 'magyar' => 'cipő','temaId' => 2]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('szavaks');
    }
};
