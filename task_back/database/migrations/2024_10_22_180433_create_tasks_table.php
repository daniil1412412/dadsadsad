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
        Schema::create('tasks', function (Blueprint $table) {
            $table->id('task_id');
            $table->string('name');
            $table->text('task_desc');
            $table->foreignId('project_id');
            $table->foreignId('empoleey');
            $table->enum('priority', ['low', 'mid', 'high' ]);
            $table->date('start_date');
            $table->date('end_date');
            $table->enum('status', ['appointed', 'running', 'completed']);
            $table->integer('remainder');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tasks');
    }
};
