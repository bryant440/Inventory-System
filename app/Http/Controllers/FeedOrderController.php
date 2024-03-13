<?php

namespace App\Http\Controllers;
use App\Models\FeedOrder;
use Illuminate\Http\Request;
class FeedOrderController extends Controller
{
    public function store(Request $request){
        $feedOrder = new FeedOrder();
        $feedOrder->feed_type = $request->input('feed_type'); // Set the feed_type field
        $feedOrder->quantity = $request->input('quantity');
        $feedOrder->save();
        return redirect()->route('add.feeds');
    }
    // Other methods in the controller
    // public function index()
    // {
    //     $feedOrders = FeedOrder::all(); // Retrieve all orders
    //     return view('admin.all_Feeds_Orders', compact('feedOrders'));

    // }
//     public function destroy(FeedOrder $feedOrder)
//     {
//         $feedOrder->delete();
//         $feedOrder = FeedOrder::all();
//         return redirect()->route('all_feed_orders.index')->with('success', 'Feeds deleted successfully');
//     }
//     public function show(FeedOrder $feedOrder)
// {
//     return view('admin.show_feed_order', compact('feedOrder'));
// }

public function feedsData(){
    $feedOrder = FeedOrder::all();
    return view('Admin.all_customers',compact('feedOrder'));
}
public function destroy($id)
{
    $feeds = FeedOrder::find($id);
    
    if($feeds) {
        $feeds->delete();
        return redirect()->route('all.customers')->with('success', 'feeds deleted successfully');
    } else {
        return redirect()->route('all.customers')->with('error', 'feeds not found');
    }
}

}