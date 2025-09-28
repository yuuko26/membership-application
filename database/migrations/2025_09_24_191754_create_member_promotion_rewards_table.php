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
        Schema::create('member_promotion_rewards', function (Blueprint $table) {
            $table->id();
            $table->foreignId('member_id')->nullable()->constrained('members');
            $table->foreignId('promotion_id')->nullable()->constrained('promotions');
            $table->foreignId('reward_id')->nullable()->constrained('promotion_rewards');
            $table->integer('step')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('member_promotion_rewards');
    }
};
