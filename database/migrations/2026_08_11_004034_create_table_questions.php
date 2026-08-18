<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('questions', function (Blueprint $table) {
            $table->id();
             $table->foreignId('user_id')->constrained()->cascadeOnDelete();
            $table->foreignId('topic_id')->constrained()->cascadeOnDelete();
            $table->string('statement');
            $table->string('explanation');
            $table->enum('answer_mode', ['simples', 'multipla', 'dissertativa']);
            $table->enum('level', ['facil', 'medio', 'dificil', 'avancado']);
            $table->enum('visibility', ['publica', 'privada']);
            $table->foreignId('source_question_id')->nullable()->constrained('questions')->nullOnDelete();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('questions');
    }
};
