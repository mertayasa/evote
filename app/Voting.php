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

    public function travel_package(){
        return $this->belongsTo('App\Candidate');
        return $this->belongsTo('App\User');
    }
}
