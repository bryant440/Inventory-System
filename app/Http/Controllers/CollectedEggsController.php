<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CollectedEggs;
class CollectedEggsController extends Controller
{
    //
    public function store(Request $request)
{
    // Validate the form data
    $validatedData = $request->validate([
        'collected_eggs' => 'required|integer',
        'egg_condition' => 'required|in:good,broken',
    ]);
    // Store the collected eggs data
    $collectedEggs = new CollectedEggs();
    $collectedEggs->collected_eggs = $validatedData['collected_eggs'];
    $collectedEggs->egg_condition = $validatedData['egg_condition'];
    $collectedEggs->save();
    return redirect()->back()->with('success', 'Collected eggs data added successfully');
}
}
