<?php

namespace App\Http\Controllers\Content;

use App\Http\Controllers\Controller;
use App\Models\Market\Product;
use App\Models\Market\ProductItem;
use App\Models\Market\ProductItemDiscount;
use App\Models\Market\Slider;
use Carbon\Carbon;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(Product $product)
    {
        $sliders = Slider::where('is_active', 1)->get()->take(5);

        // $products = Product::where('is_active' , 1)->with('productItems')->get()->take(10);
        // $products = Product::where('is_active' , 1)->get()->take(10);

        // $a = ProductItem::find(11);
        // dd($a->price_with_discount);

        // dd($product->finalDiscounts()->price_with_discount);
        // $products = Product::with('items')->where('is_active', 1)->whereHas('items', function ($productItem) {
        //         $productItem->where('is_default', 1);
        //     })
        //     ->get();

   

        $products = Product::where('is_active' , 1)->with(['items.discounts' => function ($query) {
            $query->active();
        }])->whereHas('items', function ($query) {
            $query->where('is_default', 1);
        })->get();





        return view('app.index', compact('sliders', 'products'));
    }
}
