<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Brand extends Model
{
    protected $table = 'brands';
    protected $fillable = [
        'name', 'logo'
    ];

    public function items($value='')
    {
    	return $this->hasMany('App\Item');
    }
}
