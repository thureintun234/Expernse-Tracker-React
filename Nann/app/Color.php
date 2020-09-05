<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Color extends Model
{
	protected $table = 'colors';
    protected $fillable = [
        'name', 'photo'
    ];

    public function items($value='')
    {
        return $this->belongsToMany('App\Item','color_item')
                    ->withTimestamps();
    }
}
