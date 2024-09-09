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
        Schema::create('packages', function (Blueprint $table) {
            $table->id();
            $table->string('sender_name');
            $table->string('sender_phone');
            $table->string('sender_email');
            $table->string('sender_address');
            $table->string('reciever_name');
            $table->string('reciever_phone');
            $table->string('reciever_email');
            $table->string('reciever_address');
            $table->string('country');
            $table->string('package_type');
            $table->string('package_weight');
            $table->string('shipment_method');
            $table->string('status');
            $table->string('comment');
            $table->string('tracking_id');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('packages');
    }
};
