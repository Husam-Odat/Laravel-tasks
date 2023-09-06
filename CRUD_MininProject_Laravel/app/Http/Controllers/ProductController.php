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
        $products = Product::all();

        // $products = DB::table('products')->get();
        // dd($products);

        
        // return view('Products.index');

        return view('Products.index', [
            'products' => $products
        ]);
        // return view('Products.index', compact($products));


        

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = new Product();
        $data->name = $request->input('productName');
        $data->category_name= $request->input('productCategory');	 
        $data->description = $request->input('productDesc');	 
        $data->price= $request->input('productPrice');
        $data->save();
        return redirect('Products.index');
        
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

        return view('Products.show', [
            'products' => $products
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view('Products.edit', [
            'data' => Product::where('id', $id)->first()
        ]);
        // return view('Products.edit', ['data' => Product::findOrFail($id)]);
        // return redirect ('edit',['data'=>Product::findOrFail($id)]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $data =Product::where('id', $id);
        $data->name = $request->input('productName');
        $data->category_name = $request->input('productCategory');
        $data->description = $request->input('productDesc');
        $data->price = $request->input('productPrice');

        $data->update($request->except(['_token', '_method']));
        return redirect('Products.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Product::destroy($id);

        return redirect(route('Products.index'))->with('message', 'Product has been Deleted');
    }
}
