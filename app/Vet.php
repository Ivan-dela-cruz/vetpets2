<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Vet extends Model
{
    protected $fillable=[

        'speciality_vet','votes_vet','ranking_vet'

    ];


    public function people(){
        return $this->belongsTo('App\Person','id');
    }
}
