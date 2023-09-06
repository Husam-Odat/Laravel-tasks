<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;


// use Illuminate\Support\Facades\DB;
use PhpParser\Node\Stmt\Return_;

// use App\Http\Controllers\DB;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //============old=================
        // $products = Product::all();
        // return view('Products.index', [
        //     'products' => $products
        // ]);
        //=============================

        // $products = DB::table('products')->get();
        // dd($products);

        
        // return view('Products.index');

       
        // return view('Products.index', compact($products));


        // =====rsorcess======================================
        // return view('Products.index', ['data' => Product::all()]);



        $data = Product::all();
        return view('Products.index', compact('data'));
         // =====rsorcess======================================

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Products.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {


        // $data = new Product();
        // $data->name = $request->input('productName');
        // $data->category_name= $request->input('productCategory');	 
        // $data->description = $request->input('productDesc');	 
        // $data->price= $request->input('productPrice');
        // $data->save();
        // return redirect('Products.index');


        //============old=================

        // $data = Product ::create($request->all());
        // return redirect()->route('products')->with('success','product added successfully');

        //============old=================


        // =====rsorcess======================================
        Product::create($request->all());
        return redirect()->route('Products.index')->with('message', 'Product has been Added');
        // =====rsorcess======================================


    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        $products = Product::all();

        return view('Products.show', ['products' => $products]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */

    // public function edit(Product $product)
    public function edit($id)
    {
        //====================old=======================
        // return view('Products.edit', [
        //     'data' => Product::where('id', $id)->first()
        // ]);

        //====================old=======================


        // return view('Products.edit', ['data' => Product::findOrFail($id)]);
        // return redirect ('edit',['data'=>Product::findOrFail($id)]);

        // =====rsorcess======================================

        // return view('Products.edit', compact('product'));

        return view('Products.edit', ['data' => Product::find($id)]);

        

        // =====rsorcess======================================



    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    // public function update(Product $product ,$request)
    {

        //====================old=======================

        // $data =Product::where('id', $id);
        // $data->name = $request->input('productName');
        // $data->category_name = $request->input('productCategory');
        // $data->description = $request->input('productDesc');
        // $data->price = $request->input('productPrice');

        // $data->update($request->except(['_token', '_method']));
        // return redirect('Products.index');

        //====================old=======================

        // =====rsorcess======================================
        Product::find($id)->update($request->all());
        // $product->update($request->all());

        // return redirect()->route('Products.index')->with('message', 'Product has been Updated');
        return redirect()->route('Products.index')->with('message', 'Product has been Updated');

        // =====rsorcess======================================

        $request->validate([
            'name' => ['required', 'alpha', 'min:6', 'max:10'],
            // 'email' => ['required'],
            // 'number' => ['required'],
            // 'password' => ["required"],
            // 'repeatpassword' => ["required", "same:createpassword"]
        ]);

    }



    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

        //====================old=======================

        // Product::destroy($id);

        // return redirect(route('Products.index'))->with('message', 'Product has been Deleted');
        //====================old=======================



        // =====rsorcess======================================

        // $data = Product::find($id);
        // $data->delete();
        Product::destroy($id);
        return redirect()->route('Products.index')->with('message', 'Product has been Deleted');
        
        // =====rsorcess======================================

    }

    public function handleLogin(Request $request)
    {
        $request->validate([
            'name' => ['required', 'alpha', 'min:6', 'max:10'],
            // 'email' => ['required'],
            // 'number' => ['required'],
            // 'password' => ["required"],
            // 'repeatpassword' => ["required", "same:createpassword"]
        ]);
    }
}
