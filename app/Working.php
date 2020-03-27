<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Working extends Model
{
    protected $table = 'workings'; 
    protected $primaryKey = 'id';
    protected $fillable = ['name','hour'];
}
