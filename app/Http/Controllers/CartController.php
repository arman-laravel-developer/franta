<?php

namespace App\Http\Controllers;

use App\Models\Contest;
use Illuminate\Http\Request;
use Cart;

class CartController extends Controller
{
    public function index(Request $request, $id)
    {
        $contest = Contest::find($id);
        Cart::add([
            'id'            => $contest->id,
            'name'          => $contest->title,
            'price'         => $contest->price,
            'quantity'      => $request->qty,
            'attributes'    => [
                'image'     => $contest->image,
            ]
        ]);
        return redirect()->route('cart.show');
    }

    public function show()
    {
        return view('front.cart.show');
    }

    public function update(Request $request, $id)
    {
        Cart::update($id, [
            'quantity' => [
                'relative' => false,
                'value'    => $request->qty
            ]
        ]);
        return redirect()->back()->with('message', 'Cart Item Update Successfully');
    }

    public function remove($id)
    {
        Cart::remove($id);
        return redirect()->back()->with('message', 'Cart Item Remove Successfully');
    }
}
