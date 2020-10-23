<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ch_Event extends Model
{
    protected $fillable = [
        'sort', 'title', 'sub_title','date', 'image', 'info'
    ];
}
