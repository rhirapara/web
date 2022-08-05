<?php

namespace App\Http\Controllers;
use App\Http\Requests\storeProductRequest;
use Illuminate\Http\Request;

use App\Models\product;
use App\Models\category;

class products extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */


     public function showhome(){

        $categorys = category::all();
        //    dd($categorys);
            $products = product::with('category')->get();
        
            return view('home',compact('products','categorys'));
     }

    public function index()
    {   
           
            $categorys = category::all();
       //    dd($categorys);
           $products = product::with('category')->get();
       
          // return view('home',compact('products','categorys'));
            return view('products.index',compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
        $categories= category::all();
        return view('products.create',compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(storeProductRequest $request)
    {


        $path=$request->file('photo')->store('photos','public');
      // dd($path);
        product::create([
            'product_name'=>$request->name,
            'product_price'=>$request->price,
            'desc'=>$request->desc,
            'cat_id'=>$request->cat,
            'photo' =>$path
        ]);
        return redirect()->route('products.index');
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
        $product=product::findOrFail($id);
        $categories= category::all();
        return view('products.edit',compact('product','categories'));
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
        $product=product::find($id);
        $product->update([
            'product_name'=>$request->name,
            'product_price'=>$request->price,
            'desc'=>$request->desc,
            'cat_id'=>$request->cat
        ]);
        return redirect()->route('products.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $pro=product::find($id);
        $pro->delete();

        return redirect()->route('products.index');
    }
}
