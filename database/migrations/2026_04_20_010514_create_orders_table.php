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
        Schema::create('orders', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->foreignUuid('business_id')->constrained()->onDelete('cascade');
            $table->foreignUuid('contact_id')->constrained()->onDelete('cascade');
            $table->foreignUuid('service_id')->nullable()->constrained()->onDelete('set null');
            $table->foreignUuid('price_plan_id')->nullable()->constrained()->onDelete('set null');
            $table->string('status')->default('pending');
            $table->text('special_deal')->nullable();
            $table->boolean('confirmed_by_owner')->default(false);
            $table->text('owner_notes')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('orders');
    }
};
