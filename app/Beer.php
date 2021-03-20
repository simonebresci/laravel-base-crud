<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Beer extends Model
{
    protected $fillable = ['id','name','type','quantityL','price','description','img_path'];
}
