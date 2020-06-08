<?php

namespace App\Http\Controllers;


use http\Env\Response;
use Illuminate\Support\Facades\DB;
use App\Category;
use App\Products;
use App\Sub_category;
use Illuminate\Http\Request;
use mysql_xdevapi\CollectionAdd;
use App\Http\Requests;

class ProductsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $getProducts = new Products();
        $products = $getProducts->getAll();
        return view('products.index', compact('products'));
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
            'subcategory'=>'required',
            'comment'=>'required'
        ]);

        $product = new Products([
            'title' => $request->get('title'),
            'category_id' => $request->get('category'),
            'subcategory_id' => $request->get('subcategory'),
            'comment' => $request->get('comment'),
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
        $product = Products::find($id);
        $categorys = DB::table('category')->get();
        return view('products.edit', compact('product', 'categorys'));
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
        $request->validate([
            'title'=>'required',
            'category'=>'required',
            'subcategory'=>'required',
            'comment'=>'required'
        ]);

        $product =  Products::find($id);
        $product->title =  $request->get('title');
        $product->category_id = $request->get('category');
        $product->subcategory_id = $request->get('subcategory');
        $product->comment = $request->get('comment');
        $product->save();

        return redirect('/products')->with('success', 'Product updated!');
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


    public  function fetch(Request $request)
    {

        $id = $request->get('select');
        $subclas =Category::find($id)->getSubClassId;
        return response()->json( $subclas, 200);

    }

}
