<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PersonalityPrediction extends Model
{
        use HasFactory;

    protected $fillable = [
        'user_id',
        'email',
        'time_alone',
        'social_events',
        'going_outside',
        'friends_circle',
        'post_frequency',
        'stage_fear',
        'drained_socializing',
        'personality_type',
        'confidence'
    ];
}
