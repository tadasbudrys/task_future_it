<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    public $table = "category";
    public $timestamps = false;

    protected $fillable = [
        'id',
        'name',
    ];

    public function product()
    {
        return $this->hasMany(Products::class);
//        return $this->belongsToMany('App\Sub_category', 'subcategory', 'category_id', 'id');
    }
}
