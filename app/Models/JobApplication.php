<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class JobApplication extends Model
{
    protected $guarded = ['id'];

    protected $casts = [
        'applied_at' => 'date'
    ];

    public function job(){
        return $this->belongsTo(JobListing::class, 'job_id');
    }

    public function user(){
        return $this->belongsTo(User::class, 'user_id');
    }
}
