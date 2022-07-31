<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('packages', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->decimal('amount');
            $table->string('description')->nullable();
            $table->integer('referral_bonus')->nullable()->default(0);
            $table->integer('indirect_bonus1')->nullable()->default(0);
            $table->integer('indirect_bonus2')->nullable()->default(0);
            $table->integer('welcome_bonus_point')->nullable()->default(0);
            $table->integer('points_per_login')->nullable()->default(0);
            $table->integer('points_sponsored_ads')->nullable()->default(0);
            $table->integer('points_per_review')->nullable()->default(0);
            $table->integer('points_per_rating')->nullable()->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('packages');
    }
};
