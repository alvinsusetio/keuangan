<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable =['name','nominal', 'tanggal', 'slug'];
    
    protected $table = 'category';
}
