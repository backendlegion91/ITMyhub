<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Experience extends Model
{
    //

      protected $fillable = [
        'title', 'company', 'location', 'duration', 'highlights', 'color'
    ];

    protected $casts = [
        'highlights' => 'array',
          'from' => 'date',
    'to' => 'date',
    ];
}

