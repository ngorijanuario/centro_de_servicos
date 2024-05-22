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
        Schema::create('servicos', function (Blueprint $table){
            $table->increments("id");
            $table->string("NomeDoServiço",60);
            $table->string("Valor",60);
            $table->string("Descricao",60);
            $table->string("Fornecedor",60);
            $table->string("imgem",60);
            $table->string("contecto",60);
            $table->timestamps();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
