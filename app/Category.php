<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable = [

        'name_cat', 'description_cat'

    ];

    public  function service(){
        return $this->hasMany('App\Service');
    }

}
