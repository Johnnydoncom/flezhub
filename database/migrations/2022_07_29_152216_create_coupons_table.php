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
        Schema::create('coupons', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->nullable()->constrained()->nullOnDelete();
            $table->string('code', 20)->unique();
            $table->integer('usages_left')->default(1);
            $table->boolean('multi_use')->default(false);
            $table->decimal('value');
            $table->foreignId('package_id')->nullable()->constrained()->nullOnDelete();
            $table->timestamp('expired_at')->nullable();
            $table->string('status')->default(\App\Enums\CouponStatus::Active);
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
        Schema::dropIfExists('coupons');
    }
};
