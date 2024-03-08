<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PoultryController extends Controller
{
    //
    public function updatePoultryInfo(Request $request)
{
    $numEggs = $request->input('num_eggs');
    $numChickens = $request->input('num_chickens');
    $maturityRate = $request->input('maturity_rate');
    $mortalityRate = $request->input('mortality_rate');
    $revenue =$request->input('revenue');

    // Execute logic to update poultry information

    return redirect()->back()->with('success', 'Poultry information updated successfully');
}
}
