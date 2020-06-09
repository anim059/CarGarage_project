<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PostCar extends Model
{
    //
    protected $table='post_cars'

    protected $fillable = [
        'brandname', 'modelname','description','price','rent','sell', 'color','carimage'
    ];
}
