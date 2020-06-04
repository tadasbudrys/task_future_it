<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Products extends Model
{
    public $table = "product";
    public $timestamps = false;
    protected $primaryKey = 'category_id';

    protected $fillable = [
        'title',
        'category_id',
        'subcategory_id',

    ];

    public function categorys()
    {
        return $this->belongsTo(Category::class);
//        return $this->belongsToMany('App\Category')
//            ->using('App\Sub_category')
//            ->withPivot([
//                'name',
//            ]);
    }

    public function subCategorys()
    {
        return $this->belongsTo(Sub_category::class);
      //  return $this->belongsToMany('App\Sub_category', 'category_id', 'id');
    }
}
