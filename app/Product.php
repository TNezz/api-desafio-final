<?php

namespace App;

//use Illuminate\Database\Eloquent\Model;
use Jenssegers\Mongodb\Eloquent\Model as Eloquent;


class Product extends Eloquent
{
    //Se define la conexión con MongoDB
    protected $connection = 'mongodb';

    protected $table = 'productos';
    //Los campos rellenable
    protected $fillable = array('id', 'name', 'description', 'stock');
}
