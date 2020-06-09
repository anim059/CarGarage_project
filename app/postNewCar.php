<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class postNewCar extends Model
{
    //
     protected $table='post_new_cars'

    protected $fillable = [
        'Brandname', 'Modelname','Price','featured','Description', 'Color','Carimage'
    ];
}
