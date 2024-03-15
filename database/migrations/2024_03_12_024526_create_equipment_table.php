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
        Schema::create('equipment', function (Blueprint $table) {
            $table->id();
            $table->string('code');
            $table->string('name');
            $table->integer('equipment_type_id');
            $table->integer('allocation_status');
            $table->integer('equipment_status');
            $table->dateTime('warranty_period');
            $table->integer('user_id');
            $table->integer('supplier_id');
            $table->dateTime('purchase_date');
            $table->text('equipment_description');
            $table->text('note');
            $table->integer('status');
            $table->integer('created_by');
            $table->integer('updated_by')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('equipment');
    }
};