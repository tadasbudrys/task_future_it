<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use App\Category;
use App\Products;
use App\Sub_category;
use Illuminate\Http\Request;

class ProductsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = DB::table('product')
            ->select(
                'product.id',
                'product.category_id',
                'product.subcategory_id',
                'product.title' ,
                'product.coment' ,
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
        //$products = Products::with('category');
       // dd($products);
//        $user = Products::find(1);
//        foreach ($products->Categorys as $role) {
//            echo dd($role->pivot->name);
//        }
//        $products->subCategorys()->name;

        return view('products.index')->with(['products' => $products]);
//        return view('products.index', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        $categories = Category::get();
        $subcategories = Sub_category::get();
//        return view::make('products.create', [
//            'categories' => $categories
//        ]);
      return view('products.create', compact('categories', 'subcategories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'title'=>'required',
            'category'=>'required',
            'subcategory'=>'required'
        ]);

        $product = new Products([
            'title' => $request->get('title'),
            'category_id' => $request->get('category'),
            'subcategory_id' => $request->get('subcategory'),
        ]);
        $product->save();
        return redirect('/products')->with('success', 'product saved!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
