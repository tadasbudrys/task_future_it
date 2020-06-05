<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;

class Products extends Model
{
    public $table = "product";
    public $timestamps = false;
//    protected $primaryKey = 'id';

    protected $fillable = [
        'title',
        'category_id',
        'subcategory_id',
        'comment'
    ];

//    public function categorys()
//    {
//        return $this->hasMany(Category::class, 'id' , 'category_id');
////        return $this->belongsToMany('App\Category')
////            ->using('App\Sub_category')
////            ->withPivot([
////                'name',
////            ]);
//    }
//
//    public function subCategorys()
//    {
//        return $this->hasOne(Sub_category::class,'id');
//      //  return $this->belongsToMany('App\Sub_category', 'category_id', 'id');
//    }

    public function  getAll()
    {

        $products = DB::table('product')
            ->select(
                'product.id',
                'product.category_id',
                'product.subcategory_id',
                'product.title' ,
                'product.comment' ,
                'category.category_name',
                'subcategory.subcategory_name'
            )
            ->join(
                'category',
                'product.category_id','=','category.id'
            )
            ->join(
                'subcategory',
                'product.subcategory_id','=','subcategory.id'
            )

            ->get();

        return $products;
    }

}
