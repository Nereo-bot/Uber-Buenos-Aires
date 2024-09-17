<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{

    public function up(): void
    {
        Schema::create('travels', function (Blueprint $table) {
            $table->id();
            $table->integer('payment_id');
            $table->integer('client_id');
            $table->integer('driver_id');
            $table->decimal('amount');
            $table->string('start');
            $table->string('end');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('travels');
    }
};
