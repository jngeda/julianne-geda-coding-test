<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use Illuminate\Support\Facades\File;
use Faker\Provider\ar_EG\Company;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::paginate(5);
        return view('admin.product', compact('products'))->with('i', (request()->input('page', 1) - 1 )*5);
    }
    
    public function add()
    {
        return view('admin.add');
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $products = new Product();
        if($request->hasFile('image'))
        {
            $fileDestination = 'assets/products';
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            $filename = time(). ".".$extension;
            $file->move(public_path($fileDestination), $filename);
            $products->image = $filename;
        }

        $products->name = $request->input('name');
        $products->price = $request->input('price');
        $products->description = $request->input('description');
        $products->save();
        return redirect('products')->with('message',"Product Added Succesfully");
    }

    public function edit($id)
    {
        $products = Product::find($id);
        return view('admin.edit', compact('products'));
    }

    public function update(Request $request, $id)
    {
        $products = Product::find($id);
        if($request->hasFile('image'))
        {
            $fileDestination = 'assets/products/';
            if(File::exists($fileDestination))
            {
                File::delete($fileDestination);
            }
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            $filename = time(). ".".$extension;
            $file->move(public_path($fileDestination), $filename);
            $products->image = $filename;
        }

        $products->name = $request->input('name');
        $products->price = $request->input('price');
        $products->description = $request->input('description');
        $products->update();
        return redirect('products')->with('message',"Product Updated Succesfully");
    }

    public  function delete($id)
    {
        $products = Product::find($id);
        $products->delete();
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function detail($id)
    {
        $products = Product::find($id);
        return view('admin.detail', compact('products'));
    }

    public function search(Request $request)
    {
        $search_item = Product::where('name', 'like', '%' .$request->input('query').'%')->get();
        return view('admin.search', ['products' =>$search_item]);
    }
}
