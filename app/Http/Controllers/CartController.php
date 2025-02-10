<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Darryldecode\Cart\Facades\CartFacade;

class CartController extends Controller
{
    public function listCart() {
        $items = CartFacade::getContent();
        return view('site.cart', compact('items'));
    }

    public function addCart(Request $request) {
        CartFacade::add([
            'id' => $request->id,
            'name' => $request->name,
            'price' => $request->price,
            'quantity' => $request->qnt,
            'attributes' => array(
                'image' => $request->img
            )
        ]);

        return redirect()->route('site.cart')->with('success', 'Product added to cart!');
    }
}
