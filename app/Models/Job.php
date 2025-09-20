<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Job extends Model
{
    use HasFactory;

    // Tell Laravel to use the job_listings table
    protected $table = 'job_listings';

    // Job belongs to one Employer
    public function employer()
    {
        return $this->belongsTo(\App\Models\Employer::class);
    }

    // Job belongs to many Tags (via pivot table job_listing_tag)
    public function tags()
    {
        return $this->belongsToMany(
            \App\Models\Tag::class,   // Related model
            'job_listing_tag',        // Pivot table name
            'job_listing_id',         // Foreign key on pivot pointing to Job
            'tag_id'                  // Foreign key on pivot pointing to Tag
        );
    }
}
