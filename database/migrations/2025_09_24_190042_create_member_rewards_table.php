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
            Schema::create('member_rewards', function (Blueprint $table) {
                $table->id();
                $table->foreignId('member_id')->nullable()->constrained('members');
                $table->nullableMorphs('sourceable');
                $table->decimal('amount', 8, 2)->default(0);
                $table->timestamps();
                $table->softDeletes();
            });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('member_rewards');
    }
};
