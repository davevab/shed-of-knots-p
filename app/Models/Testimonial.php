<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Testimonial extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'slug', 'testimonial', 'avatar'];

    // If you're using Laravel 8 or later, you can define a cast for the 'avatar' field to automatically convert it to an array
    protected $casts = [
        'avatar' => 'array',
    ];

    // Add any additional model configurations, relationships, or methods as needed
}
