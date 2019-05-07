<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Person extends Model
{
    protected $fillable=[

        'name_people', 'surname_people','ci_people', 'mobile_people','email_people','province_people','canton_people', 'address_people','status_people'

    ];
}
