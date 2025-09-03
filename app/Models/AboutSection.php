<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AboutSection extends Model
{
    //

    protected $fillable = [
    'initials', 'name', 'title', 'experience', 'bio', 'additional_info', 'skills'
];

protected $casts = [
    'skills' => 'array',
];

}
