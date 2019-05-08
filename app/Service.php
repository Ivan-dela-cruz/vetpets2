<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    protected $fillable=[

        'id_cat','name_ser', 'description_ser','price', 'urlphoto','status'

    ];

    public function category(){

        return $this->belongsTo('App\Category','id_cat');
    }
}
