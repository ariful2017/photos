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
        Schema::create('photos', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->onDelete('cascade');
            $table->string('name');
            $table->text('details');
            $table->string('image');
            $table->unsignedBigInteger('approved_by')->nullable();
            $table->dateTime('approved_time')->nullable();
            $table->unsignedBigInteger('buyout_by')->nullable();
            $table->dateTime('buyout_time')->nullable();
            $table->double('rate',2)->nullable();
            $table->enum('status',['pending','declined','approved','selling','buy-out','approved-un-sellable'])->default('pending');
            $table->timestamps();

            //manual foreign key setup

            $table->foreign('approved_by')->on('admins')->references('id')->onDelete('cascade');
            $table->foreign('buyout_by')->on('admins')->references('id')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('photos');
    }
};
