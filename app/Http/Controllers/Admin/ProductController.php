<?php

namespace App\Http\Controllers\Admin;

use App\Models\Image;
use App\Models\Product;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products=Product::all();
      return view('admin.product.index',compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.product.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $product=Product::create([
            'name'=>$request->name,
            'description'=>$request->description,
            'price'=>$request->price,
            'inventory'=>$request->inventory,
            'category_id'=>$request->category
        ]);

        foreach($request->images as $image){
            $random = Str::random(40);
        Storage::putFileAs('images', $image, $random);

            Image::create([
                'src'=>'images/'.$random,
                'product_id'=>$product->id,



            ]);

        };
        return redirect()->route('admin.product.index');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        // return view('admin.product.update');

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        return view('admin.product.update',compact('product'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,Product $product)
    {
        $product->update([
            'name'=>$request->name,
            'description'=>$request->description,
            'price'=>$request->price,
            'inventory'=>$request->inventory,
            'category_id'=>$request->category
        ]);

        foreach($request->images as $image){
            Image::where('product_id',$product->id)->delete();
            $random = Str::random(40);
        Storage::putFileAs('images', $image, $random);

            Image::create([
                'src'=>'images/'.$random,
                'product_id'=>$product->id,



            ]);
        return redirect()->route('admin.product.index');

    }
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        $product->delete();
    }
}
