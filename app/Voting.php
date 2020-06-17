<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Voting extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'users_id', 'candidates_id'
    ];

    protected $hidden = [];
}
