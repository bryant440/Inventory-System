<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Order;
use App\Models\Product;
use App\Models\Customer;

class OrderController extends Controller
{
    public function index()
    {
        $orders = Order::all(); // Retrieve all orders
        return view('admin.all_orders', compact('orders'));
    }
    public function destroy(Order $order)
    {
        $order->delete();
        $orders = Order::all();
        return redirect()->route('orders.index')->with('success', 'Order deleted successfully');
    }
    public function store(Request $request){
    	
        $order = new Order();
        $order->chicken_type = $request->input('name');
        $order->quantity = $request->input('quantity');
        $order->save();
        
        return redirect()->route('all.orders');
    }
     public function newStore(Request $request){
        
        
        $order = new Order();
        $order->chicken_type = $request->input('name');
        $order->quantity = $request->input('quantity');
        $order->save();
        
        return redirect()->route('all.orders');
    }

    public function newformData(){
        $products = Product::all();
        $customers = Customer::get();
        return view('Admin.new_order',compact('products','customers'));
    }

    public function ordersData(){
        $orders = Order::all();
        return view('Admin.all_orders',compact('orders'));
    }

    public function pendingOrders(){
        $orders = Order::where('order_status','=','0')->get();
        return view('Admin.pending_orders',compact('orders'));
    }

    public function deliveredOrders(){
        $orders = Order::where('order_status','!=','0')->get();
        return view('Admin.delivered_orders',compact('orders'));
    }
    
}
