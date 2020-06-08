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
