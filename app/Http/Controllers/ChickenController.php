<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Chicken;

class ChickenController extends Controller
{
    //
    public function create()
    {
        return view('create_chicken');
    }
    
    public function store(Request $request)
    {
        // Validate the form data
        $validatedData = $request->validate([
            'name' => 'required|numeric',
            'quantity' => 'required|integer',
        ]);
    
        // Create a new chicken record
        $chicken = new Chicken();
        $chicken->name = $validatedData['name'];
        $chicken->quantity = $validatedData['quantity'];
        $chicken->save();
    
        return redirect()->back()->with('status', 'Chicken information saved successfully!');
    }

}
