<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Education extends Model
{
    //

    protected $table = 'educations';
    
     protected $fillable = [
        'title',
        'institution',
        'duration',
        'type',
        'highlights',
        'border_color',
    ];

    protected $casts = [
        'highlights' => 'array',
    ];
}
