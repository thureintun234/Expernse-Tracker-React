<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
	protected $table = "items";
    protected $fillable = [
        'codeno', 'name', 'price', 'discount', 'photo1','photo2', 'description','category_id', 'brand_id', 'subcategory_id'
    ];

    public function brand($value='')
    {
    	return $this->belongsTo('App\Brand');
    }

    public function subcategory($value='')
    {
    	return $this->belongsTo('App\Subcategory');
    }

    public function colors($value='')
    {
        return $this->belongsToMany('App\Color','color_item')
                    ->withTimestamps();
    }

    public function sizes($value='')
    {
        return $this->belongsToMany('App\Size','item_size')
                    ->withTimestamps();
    }
}
