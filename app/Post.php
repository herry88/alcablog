<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    
    protected $guarded = [];
    protected $table = 'posts';
    protected $fillable = ['name','category_id',
                          'images','description'];
    protected $primaryKey = 'id';
    
}
