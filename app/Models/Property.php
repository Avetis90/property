<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Property extends Model
{
    protected $fillable = ['name', 'price', 'bedrooms', 'bathrooms', 'storeys', 'garages'];


    public function scopeSearch($query, $types)
    {
        foreach ($types as $key => $type) {
            if ($key == 'minPrice') {
                $query->where('price', '>=', $type);
            } else if ($key == 'maxPrice') {
                $query->where('price', '<=', $type);
            } else if ($key == 'name') {
                $query->where('name', 'like', '%'.$type.'%');
            } else {
                $query->where($key, $type);
            }
        }
        return $query;
    }
}
