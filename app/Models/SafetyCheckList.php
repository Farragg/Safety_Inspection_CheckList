<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SafetyCheckList extends Model
{
    use HasFactory;
    protected $fillable = [
        'floor',
        'floor_comment',
        'lighting',
        'lighting_comment',
        'emergency',
        'emergency_comment',
        'fireExtinguishers',
        'fireExtinguishers_comment',
        'trained',
        'trained_comment',
        'aidKits',
        'aidKits_comment',
        'contactNumbers',
        'contactNumbers_comment',
        'detectors',
        'detectors_comment',
        'sprinklerSystem',
        'sprinklerSystem_comment',
        'evacuation',
        'evacuation_comment',
        'employeesAwareness',
        'employeesAwareness_comment',
        'PPE',
        'PPE_comment',
        'trainedPPE',
        'trainedPPE_comment',
        'trippingHazards',
        'trippingHazards_comment',
        'safePassage',
        'safePassage_comment',
        'date',
        'time',
        'inspectorName',
    ];

    public function getYesCheckedCountAttribute()
    {
        $yesCount = 0;

        $checkListNames = [
            'floor',
            'lighting',
            'emergency',
            'fireExtinguishers',
            'trained',
            'aidKits',
            'contactNumbers',
            'detectors',
            'sprinklerSystem',
            'evacuation',
            'employeesAwareness',
            'PPE',
            'trainedPPE',
            'trippingHazards',
            'safePassage',
        ];

        foreach ($checkListNames as $name) {
            if ($this->$name === 1) {
                $yesCount++;
            }
        }

        return $yesCount;
    }

    public function getNoCheckedCountAttribute()
    {

        $noCount = 0;

        $checkListNames = [
            'floor',
            'lighting',
            'emergency',
            'fireExtinguishers',
            'trained',
            'aidKits',
            'contactNumbers',
            'detectors',
            'sprinklerSystem',
            'evacuation',
            'employeesAwareness',
            'PPE',
            'trainedPPE',
            'trippingHazards',
            'safePassage',
        ];

        foreach ($checkListNames as $name) {
            if ($this->$name === 0) {
                $noCount++;
            }
        }

        return $noCount;
    }

    public function getFormattedTimeAttribute()
    {
        return Carbon::parse($this->time)->format('h:i A');
    }
}
