<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Veterinary extends Model
{
    protected $fillable=[

        'name_veteri','lenght_veteri','latitude_veteri','province_veteri','canton_veteri','address_veteri','urlphoto_veteri','schedule_veteri','description_veteri'

    ];
}
