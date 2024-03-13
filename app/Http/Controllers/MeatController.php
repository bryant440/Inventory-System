<?php

namespace App\Http\Controllers;

use App\Models\Meat;
use Illuminate\Http\Request;

class MeatController extends Controller


{
    public function store(Request $request){
        $meatOrder = new Meat();
        $meatOrder->quantity = $request->input('quantity');
        $meatOrder->save();
        return redirect()->route('add.meat');
    }
    public function meatData(){
        $meat = Meat::all();
        return view('Admin.all_meat',compact('meat'));
    }
    public function destroy($id)
{
    $meatOrder = Meat::find($id);
    
    if($meatOrder) {
        $meatOrder->delete();
        return redirect()->route('all.meat')->with('success', 'Meat order deleted successfully');
    } else {
        return redirect()->route('all.meat')->with('error', 'Meat order not found');
    }
}
    //   public function destroy(Meat $meatOrder)
    // {
    //     $meatOrder->delete();
    //     $meatOrder = Meat::all();
    //     return redirect()->route('all.meat')->with('success', 'Feeds deleted successfully');
    // }
    public function index()
    {
        $meatOrder = Meat::all(); // Retrieve all orders
        return view('admin.all_meat', compact('meatOrder'));

    }
    // public function store(Request $request)
    // {
    //     $request->validate([
    //         'quantity' => 'required|numeric', // You can add more validation rules as needed
    //     ]);

    //     Meat::create([
    //         'quantity' => $request->quantity,
    //     ]);

    //     return redirect()->route('add.meat')->with('success', 'Meat quantity added successfully.');
    // }
}
