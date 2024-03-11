<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\FeedOrder;
class FeedOrderController extends Controller
{
    public function store(Request $request){
        $feedOrder = new FeedOrder();
        $feedOrder->feed_type = $request->input('feed_type'); // Set the feed_type field
        $feedOrder->quantity = $request->input('quantity');
        $feedOrder->save();
        return redirect()->route('all_feed_orders.index');
    }
    // Other methods in the controller
    public function index()
    {
        $feedOrders = FeedOrder::all(); // Retrieve all orders
        return view('admin.all_Feeds_Orders', compact('feedOrders'));

    }
    public function destroy(FeedOrder $feedOrder)
    {
        $feedOrder->delete();
        $feedOrder = FeedOrder::all();
        return redirect()->route('all_feed_orders.index')->with('success', 'Feeds deleted successfully');
    }
}