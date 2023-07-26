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
        Schema::create('website_subscriber', function (Blueprint $table) {
            $table->unsignedBigInteger('website_id');
            $table->unsignedBigInteger('subscriber_id');

            $table->foreign('website_id')->references('id')->on('websites')->onDelete('cascade');
            $table->foreign('subscriber_id')->references('id')->on('subscribers')->onDelete('cascade');

            $table->primary(['website_id', 'subscriber_id']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('website_subscriber');
    }
};
