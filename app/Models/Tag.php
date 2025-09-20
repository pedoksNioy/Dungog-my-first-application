<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    use HasFactory;

    // A Tag belongs to many Jobs (via pivot table job_listing_tag)
    public function jobs()
    {
        return $this->belongsToMany(
            \App\Models\Job::class,   // Related model
            'job_listing_tag',        // Pivot table name
            'tag_id',                 // Foreign key on pivot pointing to Tag
            'job_listing_id'          // Foreign key on pivot pointing to Job
        );
    }
}
