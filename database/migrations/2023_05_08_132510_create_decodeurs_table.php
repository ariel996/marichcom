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
        Schema::create('decodeurs', function (Blueprint $table) {
            $table->id();
            $table->foreignId('partner_id')->constrained('partners', 'id')->cascadeOnDelete()->cascadeOnUpdate();
            $table->string('numero_decodeur')->unique();
            $table->integer('etat_decodeur')->default(0);
            $table->decimal('prix_achat',10,2);
            $table->string('marque');
            $table->date('date');
            $table->longText('description')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('decodeurs');
    }
};
