<?php

namespace App\Http\Controllers\Market;

use App\Http\Controllers\Controller;
use App\Models\Market\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ShoppingCartController extends Controller
{

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
      
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request, Product $product)
    {
        $user = $request->user();

        $optionsIds = $request->get('options');

        if ($optionsIds) {

            $productItemHasCurrentOptions = $product->items()->whereHas('variationOptions', function ($query) use ($optionsIds) {
                $query->whereIn('variation_option_id', $optionsIds);
            }, '=', count($optionsIds))->get();

            if (collect($productItemHasCurrentOptions)->isNotEmpty()) {
                $productItem = $productItemHasCurrentOptions->first();

                $userShoppingCart = $user->shoppingCart()->first();

                if ($productItem->quantity > 0) {

                    $isAlreadyExist = $userShoppingCart->items()->where('product_item_id', $productItem->id)->exists();

                    if ($isAlreadyExist) {
                        return response()->json(['success' => true, 'message' => 'محصول قبلا به سبد خریدتان اضافه شده است.']);
                    }

                    $userShoppingCart->items()->create([
                        'product_item_id' => $productItem->id,
                        'quantity' => 1
                    ]);

                    return response()->json(['success' => true, 'message' => 'محصول به سبد خریدتان اضافه شد.']);
                }
            }
        }

        return response()->json(['success' => false, 'message' => 'محصول در انبار یافت نشد.']);
    }

    public function getCartItemCount()
    {
        $user = Auth::user();
        $cartItemCount = $user->shoppingCart()->sum('quantity');

        dd($cartItemCount);

        return response()->json(['count' => $cartItemCount]);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}