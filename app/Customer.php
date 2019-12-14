<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    //fillable example. this lets us mass fill a model of columns listed in the array with data
//    protected $fillable = ['name', 'email', 'active'];

    //guarded example. this shows the columns that should not be mass filled. kinda the opposite of fillable
    protected $guarded = [];

    // same thing as the query in the controller
    public  function scopeActive($query, $num) {
        return $query->where('active', $num);
    }
}
