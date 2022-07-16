<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Attendence extends Model
{
    protected $fillable = [
        'check_in_time', 'user_id'
    ];
}
