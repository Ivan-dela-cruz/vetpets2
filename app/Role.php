<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    protected $fillable=[

        'name_rol','description_rol','condition_rol'

    ];
}
