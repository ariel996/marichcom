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
        Schema::create('decodeur_clients', function (Blueprint $table) {
            $table->id();
            $table->foreignId('client_id')->constrained('clients', 'id')->cascadeOnDelete()->cascadeOnUpdate();
            $table->foreignId('decodeur_id')->constrained('decodeurs', 'id')->cascadeOnDelete()->cascadeOnUpdate();
            $table->date('date_affectation')->default(now());
            $table->decimal('prix_vente', 10,2);
            $table->longText('description')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('decodeur_clients');
    }
};
