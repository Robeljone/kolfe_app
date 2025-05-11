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
        Schema::create('events_tables', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('aName');
            $table->string('desc');
            $table->string('aDesc');
            $table->date('event_date');
            $table->string('place');
            $table->integer('status');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('events_tables');
    }
};
