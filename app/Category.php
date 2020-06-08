<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;
class Category extends Model
{
    public $table = "category";
    public $timestamps = false;

    protected $fillable = [
        'id',
        'category_name',
    ];

    public function getSubClassId()
    {
        return $this->hasMany(Sub_category::class, 'category_id', 'id');

    }

    public function getcategory()
    {
        $subcategory = DB::table('category')
            ->select(
                'category.id',
                'category.category_name',
                'subcategory.category_id'

            )
            ->join(
                'subcategory',
                'category.id' ,'=', 'subcategory.category_id'
            );
        return $subcategory;
    }

}
