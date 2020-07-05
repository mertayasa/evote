<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Candidate extends Model
{
    use SoftDeletes;

    protected $fillable =[
        'name', 'motto', 'vision', 'mission', 'image'
    ];

    protected $hidden =[];

    public function Voting(){
        return $this->hasMany(Voting::class);
    }

}
