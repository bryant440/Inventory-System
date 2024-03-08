<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CollectedEgg;

class CollectedEggController extends Controller
{
    //
    public function addCollectedEggs(Request $request)
{
    $collectedEgg = new CollectedEgg();
    $collectedEgg->number_of_eggs = $request->input('collected_eggs');
    $collectedEgg->save();

    return redirect()->back()->with('success', 'Collected eggs information saved successfully');
}
}
