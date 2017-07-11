<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use App\Product;

class AdminController extends Controller
{

    public function __construct(Request $request)
    {
            $this->middleware(function ($request, $next) {
            
                $this->middleware('LangMiddleware');

                $this->value = session()->get( 'lang' );

                $this->lang = DB::table('langs')->where('langs.lang', ''.$this->value.'')->value('id_lang');;
            

             return $next($request);
        });

    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        $products = Product::query()
         ->leftjoin('product_langs','products.id_product', '=', 'product_langs.id_product')->where('product_langs.id_lang', ''.$this->lang.'')
         ->get();

        return view('admin.products.index')->with('products', $products);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.products.create');
    }
    
    public function store(Request $request)
    {
        $product = new Product;
        $product->price = $request->input('price');
        $product->sku = $request->input('sku');
        $product->image =  $request->file('image')->getClientOriginalName();
       

        if (isset($product->image)) {
        $request->file('image')->move(
            base_path() . '/public/images/', $product->image
        );
        }
        $product->save();
        $langs = DB::table('langs')->get();

        for ($i=1; $i <= count($langs); $i++)
        {

        DB::table('product_langs')->insert(array(
            array('id_product' => ''.$product->id.'', 'id_lang' => ''.$i.'', 'description' => '', 'name' =>'','features' =>'')
        ));
        }
     


        return redirect()->route('dashboard.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $product = Product::where('id_product', $id)->first();
        return view('admin.products.show', array('product' => $product));    
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $product = product::find($id);
        return view('admin.products.edit')->with('product',$product);    }

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
        $product = Product::where('id_product', $id)->delete();
        $product_langs = DB::table('product_langs')->where('id_product', $id) ->delete();

        return redirect()->route('dashboard.index');    
    }
}
