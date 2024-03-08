<?php

namespace App\Http\Controllers;
use Illuminate\Support\Str;

use Illuminate\Http\Request;
use App\Models\BrokenEgg;



class ProductController extends Controller
{
    //
    public function addCollectedEggs(Request $request)
{
    $collectedEgg = new BrokenEgg();
    $collectedEgg->number_of_eggs = $request->input('collected_eggs');
    $collectedEgg->save();

    return redirect()->back()->with('success', 'Broken eggs information saved successfully');
}
}
