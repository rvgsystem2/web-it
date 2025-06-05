<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Team extends Model
{
   protected $fillable = [
        'name',
        'title',
        'image',
        'facebook',
        'twitter',
        'linkedin',
        'instagram',
    ];
    
}
