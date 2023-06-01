<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Applicant extends Model
{
    use HasFactory;

    protected $guarded = [];

    // public function job(): BelongsTo
    // {
    //     return $this->belongsTo(
    //         \App\Models\Addjob::class,
    //         'job_id'
    //     );
    // }


    public function job(): BelongsTo
    {
        return $this->belongsTo(
            \App\Models\Addjob::class,
            'job_id',
            'job_title'
        );
    }
}
