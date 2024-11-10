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
        Schema::create('safety_check_lists', function (Blueprint $table) {
            $table->id();
            $table->boolean('floor');
            $table->text('floor_comment')->nullable();
            $table->boolean('lighting');
            $table->text('lighting_comment')->nullable();
            $table->boolean('emergency');
            $table->text('emergency_comment')->nullable();
            $table->boolean('fireExtinguishers');
            $table->text('fireExtinguishers_comment')->nullable();
            $table->boolean('trained');
            $table->text('trained_comment')->nullable();
            $table->boolean('aidKits');
            $table->text('aidKits_comment')->nullable();
            $table->boolean('contactNumbers');
            $table->text('contactNumbers_comment')->nullable();
            $table->boolean('detectors');
            $table->text('detectors_comment')->nullable();
            $table->boolean('sprinklerSystem');
            $table->text('sprinklerSystem_comment')->nullable();
            $table->boolean('evacuation');
            $table->text('evacuation_comment')->nullable();
            $table->boolean('employeesAwareness');
            $table->text('employeesAwareness_comment')->nullable();
            $table->boolean('PPE');
            $table->text('PPE_comment')->nullable();
            $table->boolean('trainedPPE');
            $table->text('trainedPPE_comment')->nullable();
            $table->boolean('trippingHazards');
            $table->text('trippingHazards_comment')->nullable();
            $table->boolean('safePassage');
            $table->text('safePassage_comment')->nullable();
            $table->date('date');
            $table->time('time');
            $table->string('inspectorName');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('safety_check_lists');
    }
};
