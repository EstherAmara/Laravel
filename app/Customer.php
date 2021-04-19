<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    //fillable example. this lets us mass fill a model of columns listed in the array with data
//    protected $fillable = ['name', 'email', 'active'];

    //guarded example. this shows the columns that should not be mass filled. kinda the opposite of fillable
    protected $guarded = [];

    protected $attributes = [
        'active' => 1
    ];
    public function getActiveAttribute($attributes){
        return $this->activeOptions()[$attributes];
    }

    // same thing as the query in the controller
    public function scopeActive($query, $num) {
        return $query->where('active', $num);
    }

    public function company() {
        return $this->belongsTo(Company::class);
    }

    public function activeOptions() {
        return [
            1 => 'Active',
            2 => 'Inactive',
        ];
    }
}
