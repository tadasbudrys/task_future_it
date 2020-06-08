<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;
class Sub_category extends Model
{
    public $table = "subcategory";
    public $timestamps = false;
    protected $fillable = [
        'id',
        'subcategory_name',
        'category_id',

    ];

    public function product()
    {
        return $this->hasOne(Category::class);

    }

      public function getSubCategory($subcategorysId)
    {
            $subcategory = DB::table('subcategory')
                ->select(
                    'subcategory.id',
                    'subcategory.subcategory_name',
                    'subcategory.category_id'

                )
                ->join(
                    'category',
                    'subcategory.category_id' ,'=', 'category.id'
                )
                ->where('category.id', '=', $subcategorysId);
            return $subcategory;
    }

}
