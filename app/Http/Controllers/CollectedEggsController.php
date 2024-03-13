<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CollectedEggs;

class CollectedEggsController extends Controller
{
    public function store(Request $request)
    {

        
        $validatedData = $request->validate([
            'number_of_eggs' => 'required|integer', // Change 'collected_eggs' to 'number_of_eggs' to match the form input name
            'egg_condition' => 'required|in:good,broken',
        ]);
    
        $collected_eggs = $request->input('number_of_eggs'); // Change to 'number_of_eggs'
        $egg_condition = $request->input('egg_condition');
    
        // Check for null values (not required since Laravel validation handles it)
        // if ($collected_eggs !== null && $egg_condition !== null) {
        $collectedEggs = new CollectedEggs();
        $collectedEggs->collected_eggs = $collected_eggs;
        $collectedEggs->egg_condition = $egg_condition;
        $collectedEggs->save();
        return redirect()->route('add.product')->with('success', 'Collected eggs added successfully.'); // Redirect with success message
        // } else {
        // Handle the case where input values are null
        // You can return an error response or perform any other appropriate action
        // }
    }
    public function eggsData(){
        $eggs = CollectedEggs::all();
        return view('Admin.available_products',compact('eggs'));
    }
    public function destroy($id)
    {
        $eggs = CollectedEggs::find($id);
        
        if($eggs) {
            $eggs->delete();
            return redirect()->route('available.products')->with('success', 'Eggs deleted successfully');
        } else {
            return redirect()->route('available.products')->with('error', 'Eggs not found');
        }
    }
    
}