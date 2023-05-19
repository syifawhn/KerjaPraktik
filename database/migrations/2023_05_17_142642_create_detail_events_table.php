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
        Schema::create('detail_events', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('properti_id');
            $table->foreign('properti_id')->references('id')->on('propertys')->onUpdate('cascade')->onDelete('cascade');
            $table->unsignedBigInteger('events_id');
            $table->foreign('events_id')->references('id')->on('events')->onUpdate('cascade')->onDelete('cascade');
            $table->unsignedBigInteger('divisi_id');
            $table->foreign('divisi_id')->references('id')->on('divisi')->onUpdate('cascade')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('detail_events');
    }
};
