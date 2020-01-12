<?php

namespace App;

//use Illuminate\Database\Eloquent\Model;
use Jenssegers\Mongodb\Eloquent\Model as Eloquent;


class Product extends Eloquent
{
    protected $connection = 'mongodb';

    protected $table = 'productos';
    protected $fillable = array('id', 'name', 'description', 'stock');
}
