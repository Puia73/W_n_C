<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Addjob extends Model
{
    use HasFactory;

    protected $guarded = [];

    // public function applicants(): HasMany
    // {
    //     return $this->hasMany(
    //         \App\Models\Applicant::class,
    //         'job_id'
    //     );
    // }


    public function applicants(): HasMany
    {
        return $this->hasMany(
            \App\Models\Applicant::class,
            'job_title'
        );
    }
}
