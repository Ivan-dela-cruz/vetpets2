<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Animal extends Model
{
    protected $fillable=[

        'name_ani','weight_ani','sex_ani','urlphoto_ani'

    ];
}
