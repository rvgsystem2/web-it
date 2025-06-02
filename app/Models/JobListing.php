<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class JobListing extends Model
{
    protected  $guarded = ['id'];

    protected $casts = [
        'deadline' => 'date',
    ];

    public function category(){
        return $this->belongsTo(Category::class, 'category_id');
    }
}
