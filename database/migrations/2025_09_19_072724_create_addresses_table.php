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
        Schema::create('addresses', function (Blueprint $table) {
            $table->id();
            $table->foreignId('member_id')->nullable()->constrained('members');
            $table->foreignId('address_type_id')->nullable()->constrained('address_types');
            $table->text('address_line_1')->nullable();
            $table->text('address_line_2')->nullable();
            $table->foreignId('state_id')->nullable()->constrained('states');
            $table->foreignId('city_id')->nullable()->constrained('cities');
            $table->foreignId('country_id')->nullable()->constrained('countries');
            $table->string('postal_code')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('addresses');
    }
};
