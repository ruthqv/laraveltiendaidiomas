<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use App\CustomCollection;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

Use App\Product;

class CartController extends Controller
{


	public function __construct(Request $request)
    {
            $this->middleware(function ($request, $next) {
               $this->value = session()->get( 'lang' );	
               if (!\Session()->has('cart') ){ $this->cart = \Session()->put( 'cart',array() ); };

                return $next($request);
        });

    }


    public function show(Request $request)
    {
    	// return \Session::get('cart');
        $products = \Session::get('cart');
        return view('shoppingcart')->with('products',$products);
    	
    }

    public function add($id)
    {
        $this->value = session()->get( 'lang' );	
         
        $product = DB::table('langs')->where('langs.lang', ''.$this->value.'')
           ->leftJoin('product_langs', 'product_langs.id_lang', '=', 'langs.id_lang')->where('product_langs.id_product', ''.$id.'')         
            ->get();

    	// print_r($product);

    	$cart =\Session::get('cart');
    	$cart[]=$product;

    	\Session::put('cart', $cart);
    	
    	 // return \Session::get('cart');

    	return redirect()->route('cart-show');
    }


}
