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
        Schema::create('trains', function (Blueprint $table) {
            $table->id();
            $table->string('company',64);
            $table->date('departure_date');
            $table->time('departure_time');
            $table->string('departure_station',64);
            $table->date('arrival_date');
            $table->time('arrival_time');
            $table->string('arrival_station',64);
            $table->integer('price')->unsigned();
            $table->unsignedTinyInteger('carriages_num')->nullable();
            $table->string('train_code',7)->unique();
            $table->boolean('on_time',7)->default(true);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('trains');
    }
};
