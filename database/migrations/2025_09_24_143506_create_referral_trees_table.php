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
        Schema::create('referral_trees', function (Blueprint $table) {
            $table->id();
            $table->foreignId('upline_id')->nullable()->constrained('members');
            $table->foreignId('member_id')->nullable()->constrained('members');
            $table->integer('level')->default(0)->index();
            $table->longText('trace_key')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('referral_trees');
    }
};
