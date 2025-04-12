<?php

namespace App\Http\Controllers\User;

use Illuminate\Routing\Controller;
use App\Models\Merchandise;
use App\Models\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class MerchandiseController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $merchandise = Merchandise::where('status', 'available')
            ->where('stock', '>', 0)
            ->latest()
            ->paginate(12);
            
        return view('user.merchandise.index', compact('merchandise'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Merchandise  $merchandise
     * @return \Illuminate\Http\Response
     */
    public function show(Merchandise $merchandise)
    {
        return view('user.merchandise.show', compact('merchandise'));
    }

    /**
     * Show the form for creating a new order.
     *
     * @param  \App\Models\Merchandise  $merchandise
     * @return \Illuminate\Http\Response
     */
    public function createOrder(Merchandise $merchandise)
    {
        return view('user.merchandise.order', compact('merchandise'));
    }

    /**
     * Store a newly created order in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Merchandise  $merchandise
     * @return \Illuminate\Http\Response
     */
    public function storeOrder(Request $request, Merchandise $merchandise)
    {
        $request->validate([
            'quantity' => 'required|integer|min:1|max:' . $merchandise->stock,
            'shipping_address' => 'required|string',
            'shipping_method' => 'required|string',
        ]);

        $totalPrice = $merchandise->price * $request->quantity;

        $order = Order::create([
            'user_id' => Auth::id(),
            'merchandise_id' => $merchandise->id,
            'quantity' => $request->quantity,
            'total_price' => $totalPrice,
            'shipping_address' => $request->shipping_address,
            'shipping_method' => $request->shipping_method,
            'status' => 'pending',
        ]);

        // Update merchandise stock
        $merchandise->update([
            'stock' => $merchandise->stock - $request->quantity
        ]);

        return redirect()->route('user.orders.show', $order)
            ->with('success', 'Order placed successfully. Please complete the payment.');
    }

    /**
     * Display a listing of user's orders.
     *
     * @return \Illuminate\Http\Response
     */
    public function orders()
    {
        $orders = Order::where('user_id', Auth::id())
            ->with('merchandise')
            ->latest()
            ->paginate(10);
            
        return view('user.orders.index', compact('orders'));
    }

    /**
     * Display the specified order.
     *
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function showOrder(Order $order)
    {
        if ($order->user_id !== Auth::id()) {
            abort(403, 'Unauthorized action.');
        }
        
        return view('user.orders.show', compact('order'));
    }

    /**
     * Show the form for uploading payment proof.
     *
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function uploadPaymentForm(Order $order)
    {
        if ($order->user_id !== Auth::id()) {
            abort(403, 'Unauthorized action.');
        }
        
        return view('user.orders.upload_payment', compact('order'));
    }

    /**
     * Upload payment proof for the order.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function uploadPayment(Request $request, Order $order)
    {
        if ($order->user_id !== Auth::id()) {
            abort(403, 'Unauthorized action.');
        }

        $request->validate([
            'payment_proof' => 'required|image|mimes:jpeg,png,jpg|max:2048',
        ]);

        if ($request->hasFile('payment_proof')) {
            $path = $request->file('payment_proof')->store('payment_proofs', 'public');
            
            $order->update([
                'payment_proof' => $path,
                'status' => 'paid',
            ]);
        }

        return redirect()->route('user.orders.show', $order)
            ->with('success', 'Payment proof uploaded successfully. Your order is being processed.');
    }
}

